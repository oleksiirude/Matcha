<?php

    namespace App\Http\Controllers;
    
    
    class FilterController extends SearchController {
        
        public static function makeFiltering($profiles, $params) {
            
            dd('FilterController, make some logic here!');
            
        }
        
        
        public function filterByAge($params) {
            
            $min = $params['age_from'];
            $max = $params['age_to'];
            
            $profiles = $this->getFilteredProfiles(
                $this->findProfilesByBaseCriterias(), $min, $max, 'age'
            );
    
            return $profiles;
        }
    
        public function filterByRating($params) {
    
            $min = $params['rating_from'];
            $max = $params['rating_to'];
    
            $profiles = $this->getFilteredProfiles(
                $this->findProfilesByBaseCriterias(), $min, $max, 'rating'
            );
    
            return $profiles;
        }
    
        public function filterByDistance($params) {
    
            $min = $params['distance_from'] * 1000;
            $max = $params['distance_to'] * 1000;
    
            $profiles = $this->getFilteredProfiles(
                $this->findProfilesByBaseCriterias(), $min, $max, 'distance'
            );
    
            return $profiles;
        }
    
        public function filterByInterests($params) {
    
            $min = $params['interests_from'];
            $max = $params['interests_to'];
    
            $profiles = $this->getFilteredProfiles(
                $this->findProfilesByBaseCriterias(), $min, $max, 'interests_matched'
            );
    
            return $profiles;
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
    