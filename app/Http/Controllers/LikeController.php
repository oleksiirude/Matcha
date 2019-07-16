<?php

    namespace App\Http\Controllers;
    
    use App\Profile;
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
            return view('liked.liked-by-me');
        }
    
        public function showLikedMeProfiles() {
            return view('liked.liked-me');
        }
        
    }
