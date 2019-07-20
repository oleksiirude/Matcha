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
                
                $distance = round($distance->getLength(new Haversine()) / 1000);
                
                // distance might be 40km, 4000 just for testing
                if ($distance <= 4000) {
                    $profile['distance'] = $distance;
                    $nearby[] = $profile;
                }
            }
            
            return $nearby;
        }
    }
