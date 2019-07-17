<?php

    namespace App\Http\Controllers;
    
    use App\Ban;
    use App\Profile;
    use Auth;

    class BlockingController extends Controller {
        
        public function showBlockedProfiles() {
            $profiles = Ban::where([
                'user' => Auth::id(),
            ])->orderBy('date', 'desc')->get();
    
            foreach ($profiles as $profile)
                $profile->user = Profile::find($profile->banned);
            
            return view('blocked-profiles', ['profiles' => $profiles]);
        }
        
        public function blockUser($id, $login) {
            Controller::validateUser($id, $login);
            
            Ban::create([
                'user' => Auth::id(),
                'banned' => $id
            ]);
    
            return response()->json(['result' => true]);
        }
    
        public function unblockUser($id, $login) {
            Controller::validateUser($id, $login);
            
            Ban::where([
                'user' => Auth::id(),
                'banned' => $id
            ])->delete();
    
            return response()->json(['result' => true]);
        }
    }
