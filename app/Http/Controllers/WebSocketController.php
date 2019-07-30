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
    
            $decrypted_session = null;
            foreach ($cookies as $cookie) {
                if (explode('=', $cookie)[0] === config('session.cookie')) {
                    $decrypted_session = Crypt::decrypt(urldecode(explode('=', $cookie)[1]), false);
                    break;
                }
            }
            
            if (!$decrypted_session) {
                echo 'matcha_session did not find, connecting denied!' . PHP_EOL;
            }
    
            $this->users->attach($conn);
            $session->setId($decrypted_session);
            $conn->session = $session;
            
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
                    // get all users id joined ws
                    foreach ($this->users as $user) {
                        $id = $user->session->get(Auth::getName());
                        // check if id into users session is equal to id from client
                        if ($id === (int)$msg['to']) {
                            $connected = $this->checkIfConnected($from_id, $msg['to']);
                            // if connection check failed - break down
                            if (!$connected) {
                                break;
                            }
                            $user->send(json_encode($msg['msg']));
                            // add message to db
                            $this->addMessageToDB($from_id, $msg);
                            $sent = $this->messageSend($from_id, $msg['to'], $msg['msg']);
                            break;
                        }
                    }
                    $connected = $this->checkIfConnected($from_id, $msg['to']);
                    break;
                }
                case 'notification': {
                    break;
                }
            }
            if (!$sent && !$connected)
                echo 'Message did not send because users is not connected!' . PHP_EOL;
            if (!$sent && $connected)
                echo 'Message did not send via ws, but stored in DB' . PHP_EOL;

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
        
        public function addMessageToDB($from, $msg) {
            ChatHistory::create([
                'sender' => $from,
                'recipient' => $msg['to'],
                'message' => $msg['msg'],
                'date' => Carbon::now()
            ]);
        }
        
        public function connectionMessage($conn) {
            $conn->session->start();
            $id = $conn->session->get(Auth::getName());
            echo "User with id:$id has connected to the server" . PHP_EOL;
        }
    
        public function messageSend($from, $to, $msg) {
            echo "User[$from] has sent message[$msg] to user[$to]" . PHP_EOL;
            return true;
        }
    }
