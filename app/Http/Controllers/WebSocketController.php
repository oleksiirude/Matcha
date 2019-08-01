<?php

    namespace App\Http\Controllers;
    
    use App;
    use Carbon\Carbon;
    use Crypt;
    use Auth;
    use App\ChatHistory;
    use App\Notification;
    use Illuminate\Session\SessionManager;
    use Ratchet\MessageComponentInterface;
    use Ratchet\ConnectionInterface;
    use SplObjectStorage;
    
    class WebSocketController extends Controller implements MessageComponentInterface {
        
        protected $users;
        protected $verified;
        
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
            $from_id = $from->session->get(Auth::getName());
            
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
                            // if user connected not in chat mode - user has privacy equal false, skip this user
                            if ($user->privacy)
                                if ((int)$user->privacy['to'] === $from_id) {
                                    $user->send(json_encode(['chat' => true, 'msg' => $msg['msg']]));
                                    $this->addMessageToDB($from_id, $msg, true);
                                    $this->messageSend($from_id, $msg['to'], $msg['msg'], true);
                                    $received = true;
                                }
                        }
                    }
                    // if receiver isn't connected to ws server, but has connection with opponent -> only save message in db
                    if (!$received && $this->checkIfConnected($from_id, $msg['to'])) {
                        $this->addMessageToDB($from_id, $msg, false);
                        $this->messageSend($from_id, $msg['to'], $msg['msg'], false);
                    }
                    break;
                }
                case 'notification': {
                    // listing all connections
                    foreach ($this->users as $user) {
                        $id = $user->session->get(Auth::getName());
                        
                        // check if id into user's session is equal to id from front-end
                        if ($id === (int)$msg['to']) {
                        $user->send(json_encode(['chat' => false, 'msg' => $msg['msg']]));
                        $this->addNotificationToDB($msg, $from_id, true);
                        $this->notificationSend($from_id, $msg['to'], $msg['msg'], true);
                        
                        $received = true;
                        }
                    }
                    if (!$received) {
                        $this->addNotificationToDB($msg, $from_id, false);
                        $this->notificationSend($from_id, $msg['to'], $msg['msg'], false);
                    }
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
        
        protected function addMessageToDB($from_id, $msg, $read) {
            ChatHistory::create([
                'sender' => $from_id,
                'recipient' => $msg['to'],
                'message' => $msg['msg'],
                'read' => $read,
                'date' => Carbon::now()
            ]);
        }
    
        protected function addNotificationToDB($msg, $from_id, $read) {
            $array = explode(' ', $msg['msg']);
    
            if ($msg['chat'] === true)
                $link = asset('chat/with/' . $array[0]);
            else
                $link = asset('users/' . $array[0]);
            
            $login = array_shift($array);
            $text = implode(' ', $array);
            
            Notification::create([
                'user_id' => $msg['to'],
                'from_id' => $from_id,
                'login' => $login,
                'link' => $link,
                'title' => ' ' . $text,
                'read' => $read,
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
        
        // functions for logging into CLI
        protected function connectionMessage($conn) {
            $conn->session->start();
            $id = $conn->session->get(Auth::getName());
            echo "User[$id] has connected to the server" . PHP_EOL;
        }
    
        protected function messageSend($from, $to, $msg, $boolean) {
            if ($boolean)
                echo "User[$from] has sent message[$msg] to user[$to] [msg received, saved in db]" . PHP_EOL;
            else
                echo "User[$from] has sent message[$msg] to user[$to] [msg NOT received, saved in db]" . PHP_EOL;
        }
        
        protected function notificationSend($from, $to, $notification, $boolean) {
            if ($boolean)
                echo "User[$from] has sent notification[$notification] to user[$to] [notification received, saved in db]" . PHP_EOL;
            else
                echo "User[$from] has sent notification[$notification] to user[$to] [notification NOT received, saved in db]" . PHP_EOL;
        }
    }
