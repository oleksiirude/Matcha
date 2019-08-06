<?php
    namespace App\Http\Controllers;
    
    use Auth;
    use App\Profile;
    use App\User;
    use App\Location;
    use Illuminate\Http\Request;
    
    class SearchController extends Controller {
        
        public $profile;
        
        public function __construct()
        {
            $this->middleware(function ($request, $next) {
                $this->profile = Profile::find(Auth::id());
                return $next($request);
            });
        }
        
        public function show() {
            $profiles = $this->findProfilesByBaseCriterias();
            $profiles = collect($this->prepareCorrectProfileDataForView(
                $this->getFineDistanceView(
                    SortController::sortByDefault($profiles))
            ));
            
            return view('searching.searching', ['profiles' => $profiles->paginate(12)]);
        }
        
        public function findFilterSort(Request $request) {
            $params = $this->validateRequest($request->all());
            
            // Find profiles
            $profiles = $this->findProfilesByBaseCriterias($params['distance_to']);
            
            // Filtering
            $filter_params = array_chunk($params, 2);
            $profiles = FilterController::makeFiltering($profiles,  $filter_params);
          
            // Sorting
            if (count($profiles))
                $profiles = $this->sort($params, $profiles);
            else
                return view('searching.searching', ['profiles' =>  $profiles]);
    
            
            // Get paginate
            $profiles = $this->getPaginate($profiles, $params, $request);
            
//          return response()->json(['result' => $profiles]);
            return view('searching.searching', ['profiles' =>  $profiles]);
        }
        
        public function sort($params, $profiles) {
            $sort_params = array_chunk($params, 2, true)[4];
            $sorter = new SortController($profiles,  $sort_params);
           
            $profiles = $sorter->sortMain();
            
            return collect(
                $this->getFineDistanceView(
                    $this->prepareCorrectProfileDataForView(
                        $this->putWithoutAgeDown($profiles)
                    )));
        }
        
        public function getPaginate($profiles, $params, $request) {
            if ($params['profiles_per_page'] === 'all')
                $profiles_per_page = count($profiles);
            else
                $profiles_per_page = (int)$params['profiles_per_page'];
    
            $profiles = $profiles->paginate($profiles_per_page);
            $profiles->setPath($request->root() . $request->getRequestUri());
            
            return $profiles;
        }
        
        public function validateRequest($params) {
            $data = [
                  0 => "/^age_from$/&/^[0-9]{1,3}$/",
                  1 => "/^age_to$/&/^[0-9]{1,3}$/",
                  2 => "/^rating_from$/&/^[0-9]{1,3}$/",
                  3 => "/^rating_to$/&/^[0-9]{1,3}$/",
                  4 => "/^distance_from$/&/^[0-9]{1,5}$/",
                  5 => "/^distance_to$/&/^[0-9]{1,5}$/",
                  6 => "/^interests_from$/&/^[0-9]{1,2}$/",
                  7 => "/^interests_to$/&/^[0-9]{1,2}$/",
                  8 => "/^sort$/&/^age|distance|rating|interests$/",
                  9 => "/^order$/&/^ascending|descending$/",
                  10 => "/^profiles_per_page$/&/^6|12|24|all$/",
            ];
            
            $i = 0;
            foreach ($params as $title => $value) {
                $regexps = explode('&', $data[$i]);
                if (!preg_match($regexps[0], $title) || !preg_match($regexps[1], $value))
                    abort(400);
                if ($i === 10)
                    break;
                $i++;
            }
            
            $params['distance_from'] *= 1000;
            $params['distance_to'] *= 1000;
            
            return $params;
        }
        
        public function findProfilesByBaseCriterias($radius = null) {
            if ($this->profile->preferences === 'heterosexual')
                $profiles = $this->getMatchedProfilesForClassics();
            elseif ($this->profile->preferences === 'homosexual')
                $profiles = $this->getMatchedProfilesForHomosexuals();
            else
                $profiles = $this->getMatchedProfilesForBisexuals();
            
            if (!count($profiles))
                return $profiles;
          
            $profiles = LocationController::filterByDistance($profiles, $this->profile->user_id, $radius);
            $profiles = TagController::findTagMatches($profiles, $this->profile->user_id);
            
            return $profiles;
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
                ->orWhere('preferences', 'bisexual')
                ->where('gender', $this->profile->gender)
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
            
            foreach ($bisexuals as $user)
                $profiles[] = $user;
            foreach ($men as $user)
                $profiles[] = $user;
            foreach ($women as $user)
                $profiles[] = $user;
            
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
        
        public function prepareCorrectProfileDataForView($profiles) {
            $profiles_prepared = collect();
            
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
                $profiles_prepared[] = $profile;
                $i++;
            }
          
            return $profiles_prepared;
        }
        
        public function getFineDistanceView($profiles) {
            $profiles = $profiles->values()->all();
            
            $i = 0;
            foreach ($profiles as $profile) {
                if ($profile['distance'] <= 10) {
                    $profile['distance'] = 'right behind you!';
                }
                elseif ($profile['distance'] < 1000)
                    $profile['distance'] = $profile['distance'] . ' metres from you';
                else
                    $profile['distance'] =  round($profile['distance'] / 1000, 2) . ' km from you';
                $profiles[$i] = $profile;
                $i++;
            }
            
            return $profiles;
        }
        
        protected function putWithoutAgeDown($profiles) {
            $box = collect();
            
            $i = 0;
            foreach ($profiles as $item) {
                if (!$item['age']) {
                    $box[] = $item;
                    unset($profiles[$i]);
                }
                $i++;
            }
            
            $i = 0;
            while ($i < count($box)) {
                $profiles[] = $box[$i];
                $i++;
            }
            
            return $profiles;
        }
    }