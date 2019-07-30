<?php

    namespace App\Http\Controllers;
    
    use App\Location;
    use Location\Line;
    use Location\Coordinate;
    use Location\Distance\Haversine;

    class LocationController extends Controller {
        
        public static function filterByDistance($profiles, $id, $radius = null) {
            if (!$radius)
                $radius = 300000; // default radius -> 30km
            $auth = Location::find($id);
            
            $nearby = collect();
            
            foreach ($profiles as $profile) {
                $user = Location::find($profile->user_id);
                
                $distance = new Line(
                  new Coordinate($auth->latitude, $auth->longitude),
                  new Coordinate($user->latitude, $user->longitude)
                );
                
                $distance = (int)$distance->getLength(new Haversine());
                
                if ($distance <= $radius) {
                    $profile['distance'] = $distance;
                    $profile['rating'] = (string)$profile['rating'];
                    $nearby[] = $profile;
                }
            }
            
            return $nearby;
        }
    }
