<?php

    namespace App\Http\Controllers;
    
    use App\Interest;
    use App\Profile;
    use App\User;
    use App\Location;
    use App\Visit;
    use Auth;
    use Carbon\Carbon;
    use Illuminate\Http\Request;
    
    class HomeController extends Controller {
        protected $model_profile;
        protected $model_user;
    
        public function __construct()
        {
            $this->middleware(function ($request, $next) {
                $this->model_profile = Profile::find(Auth::id());
                $this->model_user = User::find(Auth::id());
                return $next($request);
            });
        }
        
        /**
         * Show user's profile.
         *
         * @return \Illuminate\Contracts\Support\Renderable
         */
        public function show() {
            $profile = $this->model_profile->where('user_id', $this->model_user->id)->first();
            $profile['login'] = auth()->user()->login;
            $profile['email'] = auth()->user()->email;
        
            $location = Location::where('user_id',$this->model_user->id)->first();
            $profile['country'] = $location->country;
            $profile['city'] = $location->city;
            $profile['allow'] = $location->allow;
            
            $interests = Interest::select('tag')->where('user_id', $this->model_user->id)->get();
            $profile['interests'] = $interests;
            
            return view('profile', ['profile' => $profile]);
        }
        
        public function setName(Request $request) {
            $name = $request->get('name');
            
            if (!preg_match('/^[a-zA-Z]{2,20}$/', $name))
                return response()->json([
                    'result' => false,
                    'error' => 'Invalid input']);
            
            $name = ucfirst(strtolower($name));
            
            $this->model_profile->update([
                'name' => $name
            ]);
            
            return response()->json(['result' => true]);
        }
        
        public function setSurname(Request $request) {
            $surname = $request->get('surname');
            
            if (!preg_match('/^[a-zA-Z]{2,20}$/', $surname))
                return response()->json([
                    'result' => false,
                    'error' => 'Invalid input']);
            
            $surname = ucfirst(strtolower($surname));
            
            $this->model_profile->update([
                'surname' => $surname
            ]);
            
            return response()->json(['result' => true]);
        }
        
        public function setBio(Request $request) {
            $bio = htmlentities($request->get('bio'));
            
            if (!$bio || strlen($bio) > 500)
                return response()->json([
                    'result' => false,
                    'error' => 'Invalid input']);
            
            $rating = $this->model_profile->bio ? false : true;
    
            $this->model_profile->update([
                'bio' => $bio
            ]);
            
            if ($rating === true && $bio)
                $this->increaseRating();
        
            return response()->json([
                'result' => true,
                'rating' => round($this->model_profile->rating, 1)
            ]);
        }
        
        public function deleteBio(){
            if (!$this->model_profile->bio)
                return response()->json([
                    'result' => false,
                    'error' => 'You do not have any bio to delete']);
    
            $this->model_profile->bio = "";
            $this->model_profile->save();
            $this->model_profile->decrement('rating', 0.5);

            return response()->json([
                'result' => true,
                'rating' => round($this->model_profile->rating, 1)
            ]);
        }
        
        public function setGender(Request $request) {
            $gender = $request->get('gender');
            
            if (!preg_match('/^male|female$/', $gender))
                return redirect()->back();
        
            $rating = $this->model_profile->gender ? false : true;
    
            $this->model_profile->update([
                'gender' => $gender
            ]);
        
            if ($rating === true)
                $this->increaseRating();

            return response()->json([
                'result' => true,
                'rating' => round($this->model_profile->rating, 1)
            ]);
        }
        
        public function setAge(Request $request) {
            $age = $request->get('age');
        
            if (!preg_match('/^[0-9]{2,3}$/', $age))
                return response()->json([
                    'result' => false,
                    'error' => 'Invalid input']);
            $age = (int)$age;
            if ($age < 18 || $age > 120)
                return response()->json([
                    'result' => false,
                    'error' => 'Please, choose between 18 and 120']);
        
            $rating = $this->model_profile->age ? false : true;
    
            $this->model_profile->update([
                'age' => $age
            ]);
        
            if ($rating === true)
                $this->increaseRating();

            return response()->json([
                'result' => true,
                'rating' => round($this->model_profile->rating, 1)
            ]);
        }
        
        public function setPreferences(Request $request) {
            $preferences = $request->get('preferences');
        
            if (!preg_match('/^homosexual|bisexual|heterosexual$/', $preferences))
                return redirect()->back();
        
            $rating = $this->model_profile->preferences ? false : true;
    
            $this->model_profile->update([
                'preferences' => $preferences
            ]);
        
            if ($rating === true)
                $this->increaseRating();

            return response()->json([
                'result' => true,
                'rating' => round($this->model_profile->rating, 1)
            ]);
        }
        
        public function changeLogin(Request $request) {
            $new_login = $request->get('login');
        
            if (!preg_match('/^[a-zA-Z]{3,20}$/', $new_login))
                return response()->json([
                    'result' => false,
                    'error' => 'Invalid input']);
            
            if ($this->model_user->where('login', $new_login)->first())
                return response()->json([
                    'result' => false,
                    'error' => 'This login is already taken']);
            
            $this->renameAllStuff($new_login);
            $this->model_user->update(['login' => $new_login]);
            $this->model_profile->update(['login' => $new_login]);
            
            return response()->json(['result' => true]);
        }
        
        protected function renameAllStuff($new_login) {
            $old_dir_name = public_path() . '/images/profiles/' . $this->model_user->login;
            $new_dir_name = public_path() . '/images/profiles/' . $new_login;
            rename($old_dir_name, $new_dir_name);
    
            for ($i = 1; $i < 5; $i++) {
                $photo = 'photo' . $i;
                if ($this->model_profile->$photo) {
                    $this->model_profile->$photo = str_replace($this->model_user->login,
                                                                $new_login,
                                                                $this->model_profile->$photo);
                }
            }
            $this->model_profile->avatar = str_replace($this->model_user->login,
                                                        $new_login,
                                                        $this->model_profile->avatar);
            $this->model_profile->save();
        }
        
        public function changeEmail(Request $request) {
            $email = $request->get('email');
            $password = $request->get('password');
        
            if (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,255}$/', $email))
                return response()->json([
                    'result' => false,
                    'error' => 'Invalid email']);
        
            if ($this->model_user->where('email', $email)->first())
                return response()->json([
                    'result' => false,
                    'error' => 'This email is already taken']);
            
            if (!password_verify($password, $this->model_user->password))
                return response()->json([
                    'result' => false,
                    'error' => 'Invalid password']);
    
            $this->model_user->update([
                'email' => $email
            ]);
            
            return response()->json(['result' => true]);
        }
        
        public function changePassword(Request $request) {
            $current_password = $request->get('current_password');
            $new_password = $request->get('new_password');
            $new_password_confirm = $request->get('new_password_confirm');
        
            if (!preg_match('/^(?=.*[A-Z]{1,})(?=.*[!@#$%^&*()_+-]{1,})(?=.*[0-9]{1,})(?=.*[a-z]{1,}).{8,}$/', $new_password))
                return response()->json([
                    'result' => false,
                    'error' => 'Invalid new password']);
            
            if ($new_password !== $new_password_confirm)
                return response()->json([
                    'result' => false,
                    'error' => 'Passwords do not match']);
            
            if (!password_verify($current_password, $this->model_user->password))
                return response()->json([
                    'result' => false,
                    'error' => 'Invalid password']);
    
            $this->model_user->update([
                'password' => password_hash($new_password, PASSWORD_BCRYPT)
            ]);
            
            return response()->json(['result' => true]);
        }

        protected function increaseRating() {
            if ($this->model_profile->rating < 100) {
                $this->model_profile->increment('rating', 0.5);
                if ($this->model_profile->rating >= 100)
                    $this->model_profile->rating = 100;
            }
        }

        public function showViewedProfiles() {
            $profiles = Visit::where('watcher', Auth::id())
                                ->orderBy('date', 'desc')
                                ->get();

            $now = Carbon::now();
            foreach ($profiles as $profile) {
                $profile->user = Profile::find($profile->viewed);

                $visited = Carbon::parse($profile->date);
                $diff = $now->diffInMinutes($visited, true);
                $time = substr(explode(' ', $profile->date)[1], 0, 5);
                $profile->date = UsersController::getFineActivityView($diff, $visited, $time);

                $status = User::find($profile->viewed);
                $profile->user->status = $this->checkLastActivity($status, $now);

                $profile->location = Location::find($profile->viewed);
            }

            return view('viewed-profiles', ['profiles' => $profiles]);
        }

        protected function checkLastActivity(User $user, $now) {
            if (!$user->isOnline()) {
                $last = Carbon::parse($user->last_activity);
                $diff = $now->diffInMinutes($last, true);
                $time = substr(explode(' ', $user->last_activity)[1], 0, 5);
                return 'last seen ' . UsersController::getFineActivityView($diff, $last, $time);
            }
            return 'online';
        }
    }
