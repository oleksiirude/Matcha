<?php

    namespace App\Http\Controllers;
    
    use App\Profile;
    use Auth;
    use App\Like;

    class ConnectionsController extends Controller {
        
        public function showConnections() {
            $id = Auth::id();
            $profiles = Like::where('user', $id)->get();
            
            foreach ($profiles as $profile) {
                $result = Like::where([
                    'user' => $profile->liked,
                    'liked' => $id
                ])->first();
                if ($result)
                    $users[] = $result->user;
            }
            
            $profiles = $this->getProfiles($users);
            return view('connections', ['profiles' => $profiles]);
        }
        
        protected function getProfiles($users) {
            $profiles = collect();
            
            foreach ($users as $user)
                $profiles[] = Profile::where('user_id', $user)->first();
            
            return $profiles;
        }
    }
