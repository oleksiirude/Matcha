<?php
    
    namespace App\Http\Controllers;
    
    use App\Profile;

    class ChatController extends Controller {
        
        public function showChat($login) {
            $profile = Profile::where('login', $login)->first();
            
            if (!$this->validateChat($profile))
                return view('messages.smth-went-wrong');
            
            return view('chatroom.chatroom', ['profile' => $profile]);
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
