<?php

    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    
    class FilterController extends SearchController {
        
        public function filterByAge(Request $request) {
            $this->validateFilterRequest($request->all(), 'age');
            
            $min = $request->get('age_from');
            $max = $request->get('age_to');
            
            $profiles = $this->getFilteredProfiles(
                $this->findProfilesByBaseCriterias(), $min, $max, 'age'
            );
    
            return view('searching-profiles.suggestions', ['profiles' => $profiles]);
        }
    
        public function filterByRating(Request $request) {
            $this->validateFilterRequest($request->all(), 'rating');
    
            $min = $request->get('rating_from');
            $max = $request->get('rating_to');
    
            $profiles = $this->getFilteredProfiles(
                $this->findProfilesByBaseCriterias(), $min, $max, 'rating'
            );
    
            return view('searching-profiles.suggestions', ['profiles' => $profiles]);
        }
    
        public function filterByDistance(Request $request) {
            $this->validateFilterRequest($request->all(), 'distance');
    
            $min = $request->get('distance_from') * 1000;
            $max = $request->get('distance_to') * 1000;
    
            $profiles = $this->getFilteredProfiles(
                $this->findProfilesByBaseCriterias(), $min, $max, 'distance'
            );
    
            return view('searching-profiles.suggestions', ['profiles' => $profiles]);
        }
    
        public function filterByInterests(Request $request) {
            $this->validateFilterRequest($request->all(), 'interests');
    
            $min = $request->get('interests_from');
            $max = $request->get('interests_to');
    
            $profiles = $this->getFilteredProfiles(
                $this->findProfilesByBaseCriterias(), $min, $max, 'interests_matched'
            );
    
            return view('searching-profiles.suggestions', ['profiles' => $profiles]);
        }
        
        public function validateFilterRequest($request, $aim) {
            $from = $aim . '_from';
            $to = $aim . '_to';
            
            if (!isset($request[$from]) || !isset($request[$to])
                || !preg_match('/^[0-9]{1,3}$/', $request[$from])
                || !preg_match('/^[0-9]{1,3}$/', $request[$to]))
                    abort(419);
        }
        
        public function getFilteredProfiles($profiles, $min, $max, $aim) {
            $i = 0;
            foreach ($profiles as $profile) {
                if ($profile[$aim] < $min || $profile[$aim] > $max)
                    unset($profiles[$i]);
                $i++;
            }
        
            return $this->getFineDistanceView($profiles);
        }
    }
    