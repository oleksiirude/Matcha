<?php

    namespace App\Http\Controllers;
    
    use App;
    use Carbon\Carbon;
    use Crypt;
    use Auth;
    use App\ChatHistory;
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
                echo 'matcha_session did not find, connecting denied!' . PHP_EOL;
                return ;
            }
            
            $session->setId($decrypted_session);
            $conn->session = $session;
    
            // validate GET params within WS URI, example: 'ws://localhost:8081/?from=10&to=22'
            $privacy = $this->getParamsAndValidate($conn->httpRequest->getUri()->getQuery());
    
            // if validation fails - forbid connection
            if (!$privacy) {
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
            
            // act regarding to action
            $sent = false; $connected = false;
            switch ($msg['action']) {
                case 'chat': {
                    // listing all connections
                    foreach ($this->users as $user) {
                        $id = $user->session->get(Auth::getName());
                        // check if id into user's session is equal to id from front-end
                        if ($id === (int)$msg['to']) {
                            // check if 2 users have connection
                            $connected = $this->checkIfConnected($from_id, $msg['to']);
                            // if connection check failed - break down
                            if (!$connected) {
                                continue;
                            }
                            // check if sender's id is equal to opponent's id in user's privacy settings
                            if ((int)$user->privacy['to'] === $from_id) {
                                $user->send(json_encode($msg['msg']));
                                
                                $this->addMessageToDB($from_id, $msg, true);
                                $this->messageSend($from_id, $msg['to'], $msg['msg']);
                                $sent = true;
                            }
                        }
                    }
                    // if receiver isn't connected to ws server, but has connection with opponent -> only save message in db
                    if (!$sent && $this->checkIfConnected($from_id, $msg['to'])) {
                        $this->addMessageToDB($from_id, $msg, false);
                        $connected = true;
                    }
                    break;
                }
                case 'notification': {
                    break;
                }
            }
            if (!$sent && !$connected)
                echo "Message from id:$from_id to id:$msg[to] did not send because users aren't connected!" . PHP_EOL;
            if (!$sent && $connected)
                echo "Message [$msg[msg]] from id:$from_id to id:$msg[to] did not send via ws, but stored in DB" . PHP_EOL;

        }
        
        public function onClose(ConnectionInterface $conn) {
            $this->users->detach($conn);
            $conn->session->start();
            $id = $conn->session->get(Auth::getName());
            echo "User with id:$id has left the server" . PHP_EOL;
        }
        
        public function onError(ConnectionInterface $conn, \Exception $e) {
            $conn->close();
        }
        
        public function addMessageToDB($from, $msg, $read) {
            ChatHistory::create([
                'sender' => $from,
                'recipient' => $msg['to'],
                'message' => $msg['msg'],
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
                return 'notification';
            elseif (preg_match('/^[0-9]{1,}$/', $privacy['from'])
                    && preg_match('/^[0-9]{1,}$/', $privacy['to']))
                return $privacy;
            else
                return false;
        }
        
        public function connectionMessage($conn) {
            $conn->session->start();
            $id = $conn->session->get(Auth::getName());
            echo "User with id:$id has connected to the server" . PHP_EOL;
        }
    
        public function messageSend($from, $to, $msg) {
            echo "User[$from] has sent message[$msg] to user[$to]" . PHP_EOL;
        }
    }
