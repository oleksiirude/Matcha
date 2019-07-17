<?php

    namespace App\Http\Controllers;
    
    use App\Profile;
    use App\User;
    use Auth;
    use App\Like;

    class LikeController extends Controller {
        
        public function likeUser($id, $login) {
            Controller::validateUser($id, $login);
    
            Like::create([
                'user' => Auth::id(),
                'liked' => $id
            ]);
            
            $profile = Profile::where('user_id', $id)->first();
            $this->increaseRating($profile);
            
            return response()->json(['result' => true]);
        }
    
        public function unlikeUser($id, $login) {
            Controller::validateUser($id, $login);
    
            Like::where([
                'user' => Auth::id(),
                'liked' => $id
            ])->delete();
    
            $profile = Profile::where('user_id', $id)->first();
            $profile->decrement('rating', 0.5);
    
            return response()->json(['result' => true]);
        }
        
        public function showLikedByMeProfiles() {
            $id = Auth::id();
            $profiles = Like::where('user', $id)->get();
    
            $users = [];
            foreach ($profiles as $profile) {
                $result = Like::where([
                    'user' => $id,
                    'liked' => $profile->liked
                ])->first();
                if ($result)
                    $users[] = User::find($result->liked);
            }
    
            $profiles = $this->getProfiles($users);
            return view('liked.liked-by-me', ['profiles' => $profiles]);
        }
    
        public function showLikedMeProfiles() {
            $id = Auth::id();
            $profiles = Like::where('liked', $id)->get();
            
            $users = [];
            foreach ($profiles as $profile) {
                $result = Like::where([
                    'user' => $profile->user,
                    'liked' => $id
                ])->first();
                if ($result)
                    $users[] = User::find($result->user);
            }
    
            $profiles = $this->getProfiles($users);
            return view('liked.liked-me', ['profiles' => $profiles]);
        }
    }
