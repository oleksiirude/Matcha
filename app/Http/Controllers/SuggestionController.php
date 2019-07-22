<?php

    namespace App\Http\Controllers;
    
    use Auth;
    use App\Profile;
    use App\User;
    use App\Location;
    use Illuminate\Http\Request;
    use Illuminate\Support\Collection;

    class SuggestionController extends Controller {
        
        public $profile;
    
        public function __construct()
        {
            $this->middleware(function ($request, $next) {
                $this->profile = Profile::find(Auth::id());
                return $next($request);
            });
        }
    
        public function show() {
            $profiles = $this->getFineDistanceView($this->findProfilesByBaseCriterias());
            return view('searching-profiles.suggestions', ['profiles' => $profiles]);
        }
    
        public function sort(Request $request) {
            $this->validateSortRequest($request->all());
            
            $profiles = $this->findProfilesByBaseCriterias();
            
            if (count($profiles)) {
                $sorter = new SortController($profiles, $request->all());
                $profiles = $sorter->sortMain();
            }
            
//          return response()->json(['result' => $profiles]);
            return view('searching-profiles.suggestions', ['profiles' => $profiles]);
        }
        
        public function validateSortRequest($request) {
            if (!isset($request['sort']) || !isset($request['order']))
                abort(419);
            
            if (!preg_match('/^age|distance|rating|interests$/', $request['sort'])
                    || !preg_match('/^ascending|descending$/', $request['order']))
                abort(419);
        }
        
        public function findProfilesByBaseCriterias() {
            if (!$this->profile->preferences)
                $this->profile->preferences = 'bisexual';
    
            if ($this->profile->preferences === 'heterosexual')
                $profiles = $this->getMatchedProfilesForClassics();
            elseif ($this->profile->preferences === 'homosexual')
                $profiles = $this->getMatchedProfilesForHomosexuals();
            else
                $profiles = $this->getMatchedProfilesForBisexuals();
            
            if (!count($profiles))
                return $profiles;
            
            $profiles = LocationController::filterByDistance($profiles, $this->profile->user_id);
            $profiles = TagController::findTagMatches($profiles, $this->profile->user_id);
            $profiles = SortController::sortByDefault($profiles);
           
            return $this->addInfoAboutActivityAndLocation($profiles);
        }
        
        public function getMatchedProfilesForClassics() {
            $profiles = Profile::where('gender', '!=', $this->profile->gender)
                                    ->where('preferences', '!=', 'homosexual')
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
            
            foreach ($profiles as $profile) {
                if (!$this->checkIfBlocked($profile->user_id, $this->profile->user_id)
                                                            && $profile->avatar_uploaded)
                    $clean_profiles[] = $profile;
            }
            
            return $clean_profiles;
        }
        
        public function addInfoAboutActivityAndLocation(Collection $profiles) {
            $i = 0;
            foreach ($profiles as $profile) {
                $status = User::find($profile['user_id']);
                if ($this->checkLastActivity($status) === 'online')
                    $profile['last_activity'] = 'online';
                else
                    $profile['last_activity'] = null;
                
                $location = Location::find($profile['user_id']);
                if ($location->allow) {
                    $profile['allow'] = true;
                    $profile['country'] = $location->country;
                    $profile['city'] = $location->city;
                }
                else
                    $profile['allow'] = false;
                $profile['rating'] = (string)$profile['rating'];
                $profiles[$i] = $profile;
                $i++;
            }
            
            return $profiles;
        }
        
        public function getFineDistanceView(Collection $profiles) {
            $i = 0;
            foreach ($profiles as $profile) {
                if ($profile['distance'] <= 10)
                    $profile['distance'] = 'right behind you!';
                elseif ($profile['distance'] < 1000)
                    $profile['distance'] = 'about ' . $profile['distance'] . ' metres from you';
                elseif ($profile['distance'] / 1000 === 1)
                    $profile['distance'] = 'about ' . '1 km from you';
                else
                    $profile['distance'] = 'about ' . round($profile['distance'] / 1000) . ' km from you';
                $profiles[$i] = $profile;
                $i++;
            }
            
            return $profiles;
        }
    }
