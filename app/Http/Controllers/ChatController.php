<?php
    
    namespace App\Http\Controllers;
    
    use Auth;
    use App\ChatHistory;
    use App\Profile;

    class ChatController extends Controller {
        
        public function showChat($login) {
            $profile = Profile::where('login', $login)->first();
            
            if (!$this->validateChat($profile))
                return view('messages.smth-went-wrong');
            
            $history = ChatHistory::where('sender', Auth::id())
                                    ->where('recipient', $profile->user_id)
                                    ->get();
            return view('chatroom.chatroom', ['profile' => $profile, 'history' => $history]);
        }
        
        protected function validateChat($profile) {
            if (!$profile
                || $this->checkIfBlocked($profile->user_id, auth()->user()->id)
                || $this->checkIfBlocked(auth()->user()->id, $profile->user_id)
                || !$this->checkIfConnected($profile->user_id, auth()->user()->id))
                return false;
            return true;
        }
    }
