<?php

    namespace App\Http\Controllers;
    
    use App\Profile;
    use App\User;
    use Auth;
    use App\Like;

    class ConnectionsController extends Controller {
        
        public function showConnections() {
            $id = Auth::id();
            $profiles = Like::where('user', $id)->get();
            
            $users = [];
            foreach ($profiles as $profile) {
                $result = Like::where([
                    'user' => $profile->liked,
                    'liked' => $id
                ])->first();
                if ($result)
                    $users[] = User::find($result->user);
            }
            
            $profiles = $this->getProfiles($users);
            return view('connections', ['profiles' => $profiles]);
        }
    }
