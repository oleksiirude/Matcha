<?php

    namespace App\Http\Controllers;
    
    use App\Location;
    use Location\Coordinate;
    use Location\Distance\Haversine;
    use Location\Line;

    class LocationController extends Controller {
        
        public static function filterByDistance($profiles, $id) {
            $auth = Location::find($id);
            
            $nearby = collect();
            
            foreach ($profiles as $profile) {
                $user = Location::find($profile->user_id);
                
                $distance = new Line(
                  new Coordinate($auth->latitude, $auth->longitude),
                  new Coordinate($user->latitude, $user->longitude)
                );
                
                $distance = round($distance->getLength(new Haversine()));
                
                // default search distance -> up to 100km
                if ($distance <= 1000000) {
                    $profile['distance'] = $distance;
                    $nearby[] = $profile;
                }
            }
            
            return $nearby;
        }
    }
