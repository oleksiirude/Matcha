<?php

    namespace App\Http\Controllers;

    use App\Profile;
    use Auth;
    use App\Location;
    use Location\Line;
    use Location\Coordinate;
    use Location\Distance\Haversine;
    use Illuminate\Http\Request;

    class LocationController extends Controller {
        
        public static function filterByDistance($profiles, $id, $radius = null) {
            if (!$radius)
                $radius = 300000; // default radius is 30km
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
            
            $profile = Profile::where('user_id', Auth::id())->first();
            $profile->decrement('rating', 0.5);
    
            $response = Controller::getAttributesForAuthUserProfile();
    
            return response()->json([
                'result' => true,
                'rating' => round($profile->rating, 1),
                'empty' => $response['totally_filled']
            ]);
        }

        public function changeLocation(Request $request) {
            $data = $request->json()->all();
            $box = $this->parseDataAndGetNewLocation($data);
            
            if (!$box)
                response()->json([
                    'result' => false,
                    'error' => 'Invalid location'
                ]);

            $location = Location::where('user_id', Auth::id())->first();
    
            $profile = Profile::where('user_id', Auth::id())->first();
            if (!$location->allow)
                $profile->increment('rating', 0.5);
            
            $location->update([
                'country' => $box['country'],
                'city' => $box['city'],
                'latitude' => $data['latitude'],
                'longitude' => $data['longitude'],
                'allow' => true
            ]);
            
            $response = Controller::getAttributesForAuthUserProfile();
    
            return response()->json([
                'result' => true,
                'city' => $box['city'],
                'country' => $box['country'],
                'rating' => round($profile->rating, 1),
                'empty' => $response['totally_filled']
            ]);
        }
        
        protected function parseDataAndGetNewLocation($data) {
            if (!isset($data['latitude']) || !isset($data['longitude']))
                abort(419);
            
            $key = 'AIzaSyCpslLLMvrUUPGWepKF3r-8g87FCEF2Qek';
            $uri = "https://maps.googleapis.com/maps/api/geocode/json?key=$key&latlng=$data[latitude],$data[longitude]&language=en";
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $uri);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $data = json_decode(curl_exec($ch));
            
            if (isset($data->plus_code->compound_code)) {
                $add = $data->plus_code->compound_code;
                $value = explode(',', $add);
                $count = count($value);
                $country = str_replace(' ', '', $value[$count - 1]);
                if ($count === 2) {
                    $city_code = explode(' ', $value[$count - 2]);
                    array_shift($city_code);
                    $city = implode(' ', $city_code);
                }
                else {
                    $city_code = explode(' ', $value[$count - 3]);
                    array_shift($city_code);
                    $city = implode(' ', $city_code);
                }
                return ['city' => $city, 'country' => $country];
            }
            else
                return false;
        }
    }
