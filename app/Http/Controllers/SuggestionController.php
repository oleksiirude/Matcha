<?php

    namespace App\Http\Controllers;
    
    use Auth;
    use App\Profile;
    use App\User;

    class SuggestionController extends Controller {
    
        public $profile;
        public $user;
    
        public function __construct()
        {
            $this->middleware(function ($request, $next) {
                $this->profile = Profile::find(Auth::id());
                $this->user = User::find(Auth::id());
                return $next($request);
            });
        }
    
        public function show() {
            if (!$this->profile->preferences)
                $this->profile->preferences = 'bisexual';
            
            if ($this->profile->preferences === 'heterosexual')
                $profiles = $this->getMatchedProfilesForClassics();
            elseif ($this->profile->preferences === 'homosexual')
                $profiles = $this->getMatchedProfilesForHomosexuals();
            else
                $profiles = $this->getMatchedProfilesForBisexuals();
            
            $profiles = LocationController::filterByDistance($profiles, $this->profile->user_id);
            $profiles = TagController::findTagMatches($profiles, $this->profile->user_id);
            $profiles = $this->sortByDefault($profiles);
            
            dd($profiles);
            
            return view('searching-profiles.suggestions');
        }
        
        public function getMatchedProfilesForClassics() {
            $profiles = Profile::where('gender', '!=', $this->profile->gender)
                                    ->where('preferences', $this->profile->preferences)
                                    ->get();
            
            return $this->removeBlockedProfiles($profiles);
        }
    
        public function getMatchedProfilesForHomosexuals() {
            $profiles = Profile::where('gender', $this->profile->gender)
                                    ->where('user_id', '!=', $this->profile->user_id)
                                    ->where('preferences', $this->profile->preferences)
                                    ->get();
    
            return $this->removeBlockedProfiles($profiles);
        }
    
        public function getMatchedProfilesForBisexuals() {
            $bisexuals = Profile::where('preferences', $this->profile->preferences)
                                    ->where('user_id', '!=', $this->profile->user_id)
                                    ->get();
            
            if ($this->profile->gender === 'male') {
                $men = Profile::where('preferences', 'homosexual')
                                    ->where('gender', 'male')
                                    ->where('user_id', '!=', $this->profile->user_id)
                                    ->get();
                $women = Profile::where('preferences', 'heterosexual')
                                    ->where('gender', 'female')
                                    ->get();
            }
            else {
                $men = Profile::where('preferences', 'heterosexual')
                                    ->where('gender', 'male')
                                    ->get();
                $women = Profile::where('preferences', 'homosexual')
                                    ->where('gender', 'female')
                                    ->where('user_id', '!=', $this->profile->user_id)
                                    ->get();
            }
    
            return $this->constructMatchedProfiles($bisexuals, $men, $women);
        }
        
        public function constructMatchedProfiles($bisexuals = null, $men = null, $women = null) {
            $profiles = collect();
    
            foreach ($bisexuals as $cell)
                $profiles[] = $cell;
            foreach ($men as $cell)
                $profiles[] = $cell;
            foreach ($women as $cell)
                $profiles[] = $cell;
    
            return $this->removeBlockedProfiles($profiles);
        }
        
        public function removeBlockedProfiles($profiles) {
            $clean_profiles = collect();
            
            foreach ($profiles as $item) {
                if (!$this->checkIfBlocked($item->user_id, $this->profile->user_id))
                    $clean_profiles[] = $item;
            }
            
            return $clean_profiles;
        }
        
        public function sortByDefault($profiles) {
            $sorted = collect($profiles)
                ->sortByDesc('rating')
                ->sortByDesc('matches')
                ->sortBy('distance')
                ->values()->all();
            
            return $sorted;
        }
    }
