<?php

    namespace App\Http\Controllers;

    use Auth;
    use App\User;
    use App\Visit;
    use App\Profile;
    use App\Location;
    use Carbon\Carbon;

    class VisitController extends Controller {

        protected $now;

        public function __construct() {
            $this->now =  $now = Carbon::now();
        }

        public function showViewedProfiles() {
            $profiles = Visit::where([
                'watcher' => Auth::id(),
                'deleted_by_watcher' => false
            ])->orderBy('date', 'desc')->get();

            foreach ($profiles as $profile) {
                $profile->user = Profile::find($profile->viewed);

                $visited = Carbon::parse($profile->date);
                $diff = $this->now->diffInMinutes($visited, true);
                $time = substr(explode(' ', $profile->date)[1], 0, 5);
                $profile->visited = $this->getFineActivityView($diff, $visited, $time);

                $status = User::find($profile->viewed);
                $profile->user->status = $this->checkLastActivity($status);

                $profile->location = Location::find($profile->viewed);
            }

            return view('viewed-history.viewed-profiles', ['profiles' => $profiles]);
        }

        public function showUsersViewedMyProfile() {
            $profiles = Visit::where([
                'viewed' => Auth::id(),
                'deleted_by_viewed' => false
            ])->orderBy('date', 'desc')->get();

            foreach ($profiles as $profile) {
                $profile->user = Profile::find($profile->watcher);

                $visited = Carbon::parse($profile->date);
                $diff = $this->now->diffInMinutes($visited, true);
                $time = substr(explode(' ', $profile->date)[1], 0, 5);
                $profile->visited = $this->getFineActivityView($diff, $visited, $time);

                $status = User::find($profile->watcher);
                $profile->user->status = $this->checkLastActivity($status);

                $profile->location = Location::find($profile->watcher);
            }

            return view('viewed-history.viewed-my-profile', ['profiles' => $profiles]);
        }

        public function checkLastActivity(User $user) {
            if (!$user->isOnline()) {
                $last = Carbon::parse($user->last_activity);
                $diff = $this->now->diffInMinutes($last, true);
                $time = substr(explode(' ', $user->last_activity)[1], 0, 5);
                return 'last seen ' . $this->getFineActivityView($diff, $last, $time);
            }
            return 'online';
        }

        public function deleteViewedProfile($id) {
            $visit = Visit::where([
                'viewed' => $id,
                'watcher' => Auth::id()
            ])->first();
            
            if (!$visit)
                abort(400);

            $visit->update([
                'deleted_by_watcher' => true
            ]);

            return response()->json(['result' => true]);
        }

        public function deleteViewedMeProfile($id) {
            $visit = Visit::where([
                'viewed' => Auth::id(),
                'watcher' => $id
            ])->first();
    
            if (!$visit)
                abort(400);

            $visit->update([
                'deleted_by_viewed' => true
            ]);

            return response()->json(['result' => true]);
        }
    }
