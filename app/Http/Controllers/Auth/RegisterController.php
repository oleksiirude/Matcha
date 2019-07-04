<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'login' => ['required', 'string', 'unique:users', 'regex:/^[a-zA-Z]{3,20}$/'],
            // only lowercase letters, from 3 to 20
            
            'email' => ['required', 'string', 'email', 'unique:users', 'regex:/^[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,255}$/'],
            // classic email regexp
            
            'name' => ['required', 'string', 'regex:/^[a-zA-Z]{2,20}$/'],
            // only letters, from 2 to 20
            
            'surname' => ['required', 'string', 'regex:/^[a-zA-Z]{2,20}$/'],
            // only letters, from 2 to 20
            
            'password' => ['required', 'string', 'confirmed', 'regex:/^(?=.*[A-Z]{1,})(?=.*[!@#$%^&*()_+-]{1,})(?=.*[0-9]{1,})(?=.*[a-z]{1,}).{8,}$/'],
            // at least: 1 special symbol, 1 lowercase, 1 uppercase, min length - 8 symbols
        ]);
    }
    
    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        
        event(new Registered($user = $this->create($request->all())));
    
        return response()->json(['result' => true]);
    }
    
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'login' => $data['login'],
            'name' => ucfirst(strtolower($data['name'])),
            'surname' => ucfirst(strtolower($data['surname'])),
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
