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
            
            $opponent = $profile->user_id;
            
            $history = ChatHistory::where(function ($query) use ($opponent) {
                $query->where('sender', '=', Auth::id())
                    ->where('recipient', '=', $opponent);
            })
                ->orWhere(function ($query) use ($opponent) {
                    $query->where('sender', '=', $opponent)
                        ->where('recipient', '=', Auth::id());
                })->get();
            
            $profile->your_avatar = Profile::select('avatar')
                                    ->where('user_id', Auth::id())
                                    ->pluck('avatar')[0];
            
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
