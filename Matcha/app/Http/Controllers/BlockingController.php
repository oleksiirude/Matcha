<?php

    namespace App\Http\Controllers;

    use Auth;
    use App\Ban;
    use App\Profile;
    use Carbon\Carbon;

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
    
            if (!Ban::where([
                'user' => Auth::id(),
                'banned' => $id
            ])->first())
                Ban::create([
                    'user' => Auth::id(),
                    'banned' => $id,
                    'date' => Carbon::now()
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
