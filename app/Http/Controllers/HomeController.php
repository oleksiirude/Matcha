<?php

    namespace App\Http\Controllers;

    use Auth;
    use App\Profile;
    use App\User;
    use Carbon\Carbon;
    use Illuminate\Http\Request;
    use DateTime;

    class HomeController extends Controller {
        public $model_profile;
        public $model_user;
    
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
        public static function show() {
            return view('profile', ['profile' => Controller::getAttributesForAuthUserProfile()]);
        }
        
        public function changeName(Request $request) {
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
        
        public function changeSurname(Request $request) {
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
                $this->increaseRating($this->model_profile);
            
            return $this->returnJsonBox();
        }
        
        public function deleteBio(){
            if (!$this->model_profile->bio)
                return response()->json([
                    'result' => false,
                    'error' => 'You do not have any bio to delete']);
    
            $this->model_profile->bio = "";
            $this->model_profile->save();
            $this->model_profile->decrement('rating', 0.5);
    
            return $this->returnJsonBox();
        }
        
        public function changeGender(Request $request) {
            $gender = $request->get('gender');
            
            if (!preg_match('/^male|female$/', $gender))
                abort(419);
            
    
            $this->model_profile->update([
                'gender' => $gender
            ]);

            return response()->json([
                'result' => true
            ]);
        }
        
        public function setAge(Request $request) {
            $date = $request->get('date');
            
            if (!($age = $this->validateDate($date)))
                return response()->json([
                    'result' => false,
                    'error' => 'Invalid date of birth']);
            
        
            $rating = $this->model_profile->age ? false : true;
    
            $this->model_profile->update([
                'age' => $date
            ]);
        
            if ($rating === true)
                $this->increaseRating($this->model_profile);
    
            $profile = Controller::getAttributesForAuthUserProfile();
            
            return response()->json([
                'result' => true,
                'age' => $age,
                'rating' => round($this->model_profile->rating, 1),
                'empty' => $profile['totally_filled']
            ]);
        }
        
        public function setPreferences(Request $request) {
            $preferences = $request->get('preferences');
        
            if (!preg_match('/^homosexual|bisexual|heterosexual$/', $preferences))
                abort(419);
        
            $rating = $this->model_profile->preferences ? false : true;
    
            $this->model_profile->update([
                'preferences' => $preferences
            ]);
        
            if ($rating === true)
                $this->increaseRating($this->model_profile);
    
            return $this->returnJsonBox();
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
    
            $this->model_user->update(['login' => $new_login]);
            $this->model_profile->update(['login' => $new_login]);
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
        
        protected function returnJsonBox() {
            $profile = Controller::getAttributesForAuthUserProfile();
    
            return response()->json([
                'result' => true,
                'rating' => round($this->model_profile->rating, 1),
                'empty' => $profile['totally_filled']
            ]);
        }
    
        protected function validateDate($date) {
            $check = DateTime::createFromFormat('Y-m-d', $date);
            $boolean = $check && $check->format('Y-m-d') === $date;
    
            if (!$boolean)
                return false;
 
            $age = Carbon::parse($date)->age;
            if ($age < 18 || $age > 120)
                return false;
    
           return $age;
        }
    }
