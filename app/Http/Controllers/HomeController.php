<?php

    namespace App\Http\Controllers;
    
    use App\Interest;
    use App\Profile;
    use App\User;
    use App\Location;
    use Auth;
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
            
            if (!$bio)
                return response()->json([
                    'result' => false,
                    'error' => 'Invalid input']);
            
            $rating = $this->model_profile->bio ? false : true;
    
            $this->model_profile->update([
                'bio' => $bio
            ]);
            
            if ($rating === true && $bio)
                $this->model_profile->increment('rating', 0.5);
        
            return response()->json(['result' => true]);
        }
        
        public function deleteBio(){
            if (!$this->model_profile->bio)
                return response()->json([
                    'result' => false,
                    'error' => 'You do not have any bio to delete']);
    
            $this->model_profile->bio = "";
            $this->model_profile->save();
            $this->model_profile->decrement('rating', 0.5);
    
            return response()->json(['result' => true]);
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
                $this->model_profile->increment('rating', 0.5);
            
            return response()->json(['result' => true]);
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
                $this->model_profile->increment('rating', 0.5);
            
            return response()->json(['result' => true]);
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
                $this->model_profile->increment('rating', 0.5);
        
            return response()->json(['result' => true]);
        }
        
        public function changeLogin(Request $request) {
            $login = $request->get('login');
        
            if (!preg_match('/^[a-zA-Z]{3,20}$/', $login))
                return response()->json([
                    'result' => false,
                    'error' => 'Invalid input']);
            
            if ($this->model_user->where('login', $login)->first())
                return response()->json([
                    'result' => false,
                    'error' => 'This login is already taken']);
    
            $this->model_user->update([
                'login' => $login
            ]);
            
            return response()->json(['result' => true]);
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
    }
