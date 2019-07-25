<?php

    namespace App\Http\Controllers;

    class FilterController extends SearchController {
        
        public static function makeFiltering($profiles, $filters) {
            $aim = [
                0 => 'age',
                1 => 'rating',
                2 => 'distance',
                3 => 'interests_matched'
            ];
            
            $i = 0; $j = 0;
            foreach ($profiles as $profile) {
                while ($i < 4) {
                    if ($profile[$aim[$i]] < $filters[$i][0] || $profile[$aim[$i]] > $filters[$i][1])
                        unset($profiles[$j]);
                    $i++;
                }
                $i = 0;
                $j++;
            }
            return $profiles;
        }
    }
    