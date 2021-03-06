<?php

    namespace App\Http\Controllers;
    
    use App\User;
    use App\Visit;
    use App\Interest;
    use App\Profile;
    use App\Location;
    use Carbon\Carbon;

    class UsersController extends Controller {
        
        public function showUser($login) {
            $user = User::where('login', $login)->first();

            if (!$user || !$user->email_verified_at)
                abort(404);
            
            if ($login === auth()->user()->login)
                return redirect('profile');

            $this->addDataToVisitsTable($user->id, auth()->user()->id);
        
            return view('user', ['profile' => $this->fillDataInBox($user)]);
        }

        protected function fillDataInBox(User $user) {
            $profile = Profile::find($user->id);
            $location = Location::find($user->id);
            $interests = Interest::where('user_id', $user->id)->get();

            $aim = $user->id;
            $auth = auth()->user()->id;

            $profile['auth_user_avatar_uploaded'] = $this->ifAvatarUploaded();
            $profile['login'] = $user->login;
            $profile['country'] = $location->country;
            $profile['city'] = $location->city;
            $profile['allow'] = $location->allow;
            $profile['latitude'] = $location->latitude;
            $profile['longitude'] = $location->longitude;
            $profile['interests'] = $interests;
            $profile['reported'] = $this->checkIfReported($auth, $aim);
            $profile['last_activity'] = $this->checkLastActivity($user);
            $profile['liked'] = $this->checkIfLiked($aim, $auth);
            $profile['liked_me'] = $this->checkIfLikedMe($aim, $auth);
            $profile['blocked'] = $this->checkIfBlocked($aim, $auth);
            $profile['connected'] = $this->checkIfConnected($aim, $auth);
            $profile->age = Carbon::parse($profile->age)->age;
            
            return $profile;
        }

        public function increaseRating($id) {
            $profile = Profile::find($id);
            if ($profile->rating < 100) {
                $profile->increment('rating', 0.1);
                if ($profile->rating >= 100)
                    $profile->rating = 100;
            }
        }

        protected function addDataToVisitsTable($viewed, $watcher) {
            $visits = Visit::where([
                'viewed' => $viewed,
                'watcher' => $watcher
            ])->first();

            if (!$visits) {
                $this->increaseRating($viewed);

                $visits = new Visit();
                $visits->viewed = $viewed;
                $visits->watcher = $watcher;
                $visits->date = Carbon::now();
                $visits->save();
            }
            else {
                $visits->deleted_by_watcher = false;
                $visits->deleted_by_viewed = false;
                $visits->date = Carbon::now();
                $visits->save();
            }
        }
    }
