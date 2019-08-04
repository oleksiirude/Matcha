<?php

    namespace App\Http\Controllers;

    use Auth;
    use App\Location;
    use Location\Line;
    use Location\Coordinate;
    use Location\Distance\Haversine;
    use Illuminate\Http\Request;

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
        
        public function turnOffLocation() {
            Location::where('user_id', Auth::id())->update(['allow' => false]);
            return 'true';
        }
        
        public function changeLocation(Request $request) {
            $data = $request->json()->all();
            if (count($data) < 4)
                return 'false';

            Location::where('user_id', Auth::id())
                        ->update([
                            'country' => $data['country'],
                            'city' => $data['city'],
                            'latitude' => $data['latitude'],
                            'longitude' => $data['longitude'],
                            'allow' => true
                        ]);
            return 'true';
        }
    }
