<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller {

    /**
     * Show user's profile.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show() {
        $profile = Profile::where('user_id', Auth::id())->first();
        $profile['login'] = auth()->user()->login;
        $profile['email'] = auth()->user()->email;
        
        return view('profile', ['profile' => $profile]);
    }
    
    public function setName(Request $request) {
        $name = $request->get('name');
        
        if (!preg_match('/^[a-zA-Z]{2,20}$/', $name))
            return response()->json([
                'result' => false,
                'error' => 'Invalid input']);
        
        $name = ucfirst(strtolower($name));
        
        $model = Profile::find(Auth::id());
        $model->update([
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
        
        $model = Profile::find(Auth::id());
        $model->update([
            'surname' => $surname
        ]);
        
        return response()->json(['result' => true]);
    }
    
    public function setBio(Request $request) {
        $bio = htmlentities($request->get('bio'));
    
        $model = Profile::find(Auth::id());
        
        $rating = $model->bio ? false : true;
        
        $model->update([
            'bio' => $bio
        ]);
        
        if ($rating === true && $bio) {
            $model->increment('rating', 0.5);
        } elseif ($rating === false && !$bio)
            $model->decrement('rating', 0.5);
    
        return response()->json(['result' => true]);
    }
    
    public function setGender(Request $request) {
        $gender = $request->get('gender');
        
        if (!preg_match('/^male|female$/', $gender))
            return redirect()->back();
    
        $model = Profile::find(Auth::id());
    
        $rating = $model->gender ? false : true;
    
        $model->update([
            'gender' => $gender
        ]);
    
        if ($rating === true)
            $model->increment('rating', 0.5);
        
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
        
        $model = Profile::find(Auth::id());
    
        $rating = $model->age ? false : true;
    
        $model->update([
            'age' => $age
        ]);
    
        if ($rating === true)
            $model->increment('rating', 0.5);
        
        return response()->json(['result' => true]);
    }
    
    public function setPreferences(Request $request) {
        $preferences = $request->get('preferences');
    
        if (!preg_match('/^homosexual|bisexual|heterosexual$/', $preferences))
            return redirect()->back();
        
        $model = Profile::find(Auth::id());
    
        $rating = $model->preferences ? false : true;
    
        $model->update([
            'preferences' => $preferences
        ]);
    
        if ($rating === true)
            $model->increment('rating', 0.5);
    
        return response()->json(['result' => true]);
    }
    
    public function changeLogin(Request $request) {
        $login = $request->get('login');
    
        if (!preg_match('/^[a-zA-Z]{3,20}$/', $login))
            return response()->json([
                'result' => false,
                'error' => 'Invalid input']);
        
        if (User::where('login', $login)->first())
            return response()->json([
                'result' => false,
                'error' => 'This login is already taken']);
    
        $model = User::find(Auth::id());
        
        $model->update([
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
    
        if (User::where('email', $email)->first())
            return response()->json([
                'result' => false,
                'error' => 'This email is already taken']);
    
        $model = User::find(Auth::id());
        if (!password_verify($password, $model->password))
            return response()->json([
                'result' => false,
                'error' => 'Invalid password']);
        
        $model->update([
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
    
        $model = User::find(Auth::id());
        if (!password_verify($current_password, $model->password))
            return response()->json([
                'result' => false,
                'error' => 'Invalid password']);
        
        $model->update([
            'password' => password_hash($new_password, PASSWORD_BCRYPT)
        ]);
        
        return response()->json(['result' => true]);
    }
}
