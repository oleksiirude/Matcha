<?php

    namespace App\Http\Controllers;
    
    use App;
    use Carbon\Carbon;
    use Crypt;
    use Auth;
    use App\User;
    use App\ChatHistory;
    use App\Notification;
    use Illuminate\Session\SessionManager;
    use Ratchet\MessageComponentInterface;
    use Ratchet\ConnectionInterface;
    use SplObjectStorage;
    
    class WebSocketController extends Controller implements MessageComponentInterface {
        
        protected $users;
        
        public function __construct() {
            $this->users = new SplObjectStorage;
        }
        
        public function onOpen(ConnectionInterface $conn) {
            $session = (new SessionManager(App::getInstance()))->driver();
            $cookies = explode(' ', $conn->httpRequest->getHeader('Cookie')[0]);
    
            // cookie validation
            $decrypted_session = null;
            foreach ($cookies as $cookie) {
                if (explode('=', $cookie)[0] === config('session.cookie')) {
                    $decrypted_session = Crypt::decrypt(urldecode(explode('=', $cookie)[1]), false);
                    break;
                }
            }
            
            // if validation fails - forbid connection
            if (!$decrypted_session) {
                echo 'matcha_session was not found, connecting denied!' . PHP_EOL;
                return ;
            }
            
            $session->setId($decrypted_session);
            $conn->session = $session;
    
            // validate GET params within WS URI, example: 'ws://localhost:8081/?from=10&to=22'
            $privacy = $this->getParamsAndValidate($conn->httpRequest->getUri()->getQuery());
    
            // if validation fails - forbid connection
            if ($privacy === 'bastard') {
                echo 'Bastard detected, connection abort' . PHP_EOL;
                return ;
            }
            
            $conn->privacy = $privacy;
            $this->users->attach($conn);
            $this->connectionMessage($conn);
        }
        
        public function onMessage(ConnectionInterface $from, $msg) {
            $from->session->start();
            $from_id = $from->session->get(Auth::getName()); // receiving users id from session
            
            // update users online status in cache and db
            $this->updateUsersOnlineStatus($from_id);
            
            // decode json data into php array
            $msg = json_decode($msg, true);
            
            if (!$this->checkBlockingAndConnection($from, $from_id, $msg))
                return;
            
            // act regarding to action
            $received = false;
            switch ($msg['action']) {
                case 'chat': {
                    // listing all connections
                    foreach ($this->users as $user) {
                        $id = $user->session->get(Auth::getName());
                        // check if id into user's session is equal to id from front-end
                        if ($id === (int)$msg['to']) {
                            // check if 2 users have connection
                            // if connection check failed - break down
                            if (!$this->checkIfConnected($from_id, $msg['to'])) {
                                $from->send(json_encode(['chat' => true, 'not-connected' => true, 'msg' => 'not-connected']));
                                echo "User[$from_id] has no connection with user[$msg[to]]. Conversation aborted" . PHP_EOL;
                                return;
                            }
                            // check if sender's id is equal to opponent's id in user's privacy settings
                            // if user connected not in chat mode - user has privacy equal false, go to else condition
                            if ($user->privacy) {
                                if ((int)$user->privacy['to'] === $from_id) {
                                    $user->send(json_encode(['chat' => true, 'msg' => $msg['msg']]));
                                    $this->addMessageToDB($from_id, $msg);
                                    $this->messageSendPrintInCLI($from_id, $msg['to'], $msg['msg'], true);
                                    $received = true;
                                }
                                else {
                                    // if user have connection with sender and now not in chat with him, but with other user
                                    // send notification to user with 'chat => false' setting (so message won't get into foreign chat)
                                    $this->sendMessageNotificationToUser($user, $msg, $from_id);
                                    $this->addMessageToDB($from_id, $msg);
                                    $received = true;
                                }
                            } else {
                                // if user have connection with sender, but now it's connection doesn't have privacy
                                // send notification to user with 'chat => false' setting
                                $this->sendMessageNotificationToUser($user, $msg, $from_id);
                                $this->addMessageToDB($from_id, $msg);
                                $received = true;
                            }
                        }
                    }
                    // if receiver isn't connected to ws server, but has connection with opponent -> only save message in db
                    if (!$received && $this->checkIfConnected($from_id, $msg['to'])) {
                        $this->addMessageToDB($from_id, $msg);
                        $this->addNotificationMessageToDB($msg, ' has sent you message', $from_id);
                        $this->messageSendPrintInCLI($from_id, $msg['to'], $msg['msg'], false);
                    }
                    break;
                }
                case 'notification': {
                    $notification = $this->specifyNotification($msg['aim'], $msg['to'], $from_id);
                    // listing all connections
                    foreach ($this->users as $user) {
                        $id = $user->session->get(Auth::getName());
                        
                        // check if id into user's session is equal to id from front-end
                        if ($id === (int)$msg['to']) {
                            switch ($msg['aim']) {
                                case 'like': {
                                    if ($this->checkIfLikedMe($msg['to'], $from_id))
                                        $received = $this->sendNotificationToUser($user, $msg, $notification, $from_id);
                                    else
                                        $received = $this->sendNotificationToUser($user, $msg, $notification, $from_id);
                                    break;
                                }
                                case 'unlike': {
                                    if ($this->checkIfConnected($from_id, $msg['to']))
                                        $received = $this->sendNotificationToUser($user, $msg, $notification, $from_id);
                                    break;
                                }
                                case 'checked': {
                                    if (!$this->ifAlreadyPresentInNotifications($msg['to'], $from_id))
                                        $received = $this->sendNotificationToUser($user, $msg, $notification, $from_id);
                                    break;
                                }
                            }
                        }
                    }
                    if (!$received)
                        $this->handleNotificationIfOffline($msg, $notification, $from_id);
                    break;
                }
                case 'status': {
                    $status = $this->checkLastActivity(User::find($msg['to']));
                    
                    if ($status === 'online')
                        $status = 'is online';
                    $from->send(json_encode(['chat' => true, 'status' => true, 'data' => $status]));
                    break;
                }
            }
        }
        
        public function onClose(ConnectionInterface $conn) {
            $this->users->detach($conn);
            $conn->session->start();
            $id = $conn->session->get(Auth::getName());
            echo "User[$id] has left the server" . PHP_EOL;
        }
        
        public function onError(ConnectionInterface $conn, \Exception $e) {
            $conn->close();
        }
        
        
        protected function checkBlockingAndConnection($from, $from_id, $msg) {
            // if opponent blocked user, refuse conversation attempt
            if ($this->checkIfBlocked($from_id, $msg['to'])) {
                $from->send(json_encode(['chat' => true, 'blocked' => true, 'msg' => 'blocked']));
                echo "User[$from_id] blocked by user[$msg[to]]. Action aborted" . PHP_EOL;
                return false;
            }
    
            // if opponent blocked user, refuse conversation attempt
            // reverse usage of function checkIfBlocked - here we refuse opponent's conversation attempt
            if ($this->checkIfBlocked($msg['to'], $from_id)) {
                $from->send(json_encode(['chat' => true, 'blocked' => true, 'msg' => 'blocked']));
                echo "User[$from_id] blocked by user[$msg[to]]. Action aborted" . PHP_EOL;
                return false;
            }
    
            // if connection check failed - break down
            if (!$this->checkIfConnected($from_id, $msg['to']) && $msg['action'] === 'chat') {
                $from->send(json_encode(['chat' => true, 'not-connected' => true, 'msg' => 'not-connected']));
                echo "User[$from_id] has no connection with user[$msg[to]]. Conversation aborted" . PHP_EOL;
                return false;
            }
            
            return true;
        }
        
        protected function addMessageToDB($from_id, $msg) {
            ChatHistory::create([
                'sender' => $from_id,
                'recipient' => $msg['to'],
                'message' => $msg['msg'],
                'date' => Carbon::now()
            ]);
        }
        
        protected function getParamsAndValidate($params) {
            if (!$params)
                return false;
            $params = explode('&', $params);
            
            foreach ($params as $item) {
                $result = explode('=', $item);
                $privacy[$result[0]] = $result[1];
            }
           
            if (preg_match('/^user$/', $privacy['from'])
                    && preg_match('/^user$/', $privacy['to']))
                return false;
            elseif (preg_match('/^[0-9]{1,}$/', $privacy['from'])
                    && preg_match('/^[0-9]{1,}$/', $privacy['to']))
                return $privacy;
            else
                return 'bastard';
        }
        
        protected function specifyNotification($notification, $user, $from) {
            if ($notification === 'checked')
                $result = ' has checked your profile';
            else if ($notification === 'like') {
                if ($this->checkIfLikedMe($user, $from))
                    $result = ' liked you back';
                else
                    $result = ' liked you';
            }
            else
                $result = ' unliked you';
            
            return $result;
        }
        
        protected function sendNotificationToUser($user, $msg, $notification, $from_id) {
            $user->send(json_encode(['chat' => false, 'msg' => $msg['login'] . $notification]));
            $this->notificationSendPrintInCLI($from_id, $msg['to'], 'message', true);
            
            return true;
        }
    
        protected function sendMessageNotificationToUser($user, $msg, $from_id) {
            $user->send(json_encode(['chat' => false, 'msg' => $msg['login'] . ' has sent you message']));
            $this->notificationSendPrintInCLI($from_id, $msg['to'], 'message', true);
        
            return true;
        }
        
        protected function handleNotificationIfOffline($msg, $notification, $from_id) {
            // save data to db only if user's id is valid
            if (User::where('id', $msg['to'])->first())
                switch ($msg['aim']) {
                    case 'like': {
                        if ($this->checkIfLikedMe($msg['to'], $from_id))
                            $this->addNotificationToDb($msg, $notification, $from_id);
                        else
                            $this->addNotificationToDb($msg, $notification, $from_id);
                        break;
                    }
                    case 'unlike': {
                        if ($this->checkIfConnected($from_id, $msg['to']))
                            $this->addNotificationToDb($msg, $notification, $from_id);
                        break;
                    }
                    case 'checked': {
                        if (!$this->ifAlreadyPresentInNotifications($msg['to'], $from_id))
                            $this->addNotificationToDb($msg, $notification, $from_id);
                        break;
                    }
                }
        }
        
        protected function addNotificationToDB($msg, $text, $from_id) {
           $link = asset('users/' . $msg['login']);
            
            Notification::create([
                'user_id' => $msg['to'],
                'from_id' => $from_id,
                'login' => $msg['login'],
                'link' => $link,
                'title' => $text,
                'date' => Carbon::now()
                ]);
        }
    
        protected function addNotificationMessageToDB($msg, $text, $from_id) {
            $link = asset('chat/with/' . $msg['login']);
      
            if (Notification::where([
                    'user_id' => $msg['to'],
                    'login' => $msg['login'],
                    'message' => true
                ])->first()) {
                $row = Notification::where([
                    'user_id' => $msg['to'],
                    'login' => $msg['login'],
                    'message' => true])->first();
    
                $row->update(['date' => Carbon::now()]);
                
                $row->where([
                    'user_id' => $msg['to'],
                    'login' => $msg['login'],
                    'message' => true])
                    ->increment('counter', 1);
            }
            else
                Notification::create([
                    'user_id' => $msg['to'],
                    'from_id' => $from_id,
                    'login' => $msg['login'],
                    'link' => $link,
                    'title' => $text,
                    'message' => true,
                    'date' => Carbon::now()
                ]);
        }
        
        // functions for logging into CLI
        protected function connectionMessage($conn) {
            $conn->session->start();
            $id = $conn->session->get(Auth::getName());
            echo "User[$id] has connected to the server" . PHP_EOL;
        }
    
        protected function messageSendPrintInCLI($from, $to, $msg, $boolean) {
            if ($boolean)
                echo "User[$from] has sent message[$msg] to user[$to] [msg received, saved in db]" . PHP_EOL;
            else
                echo "User[$from] has sent message[$msg] to user[$to] [msg NOT received, saved in db]" . PHP_EOL;
        }
        
        protected function notificationSendPrintInCLI($from, $to, $notification, $boolean) {
            if ($boolean)
                echo "User[$from] has sent notification[$notification] to user[$to] [notification received, saved in db]" . PHP_EOL;
            else
                echo "User[$from] has sent notification[$notification] to user[$to] [notification NOT received, saved in db]" . PHP_EOL;
        }
    }
