<?php

namespace App\Http\Controllers;

use App\Profile;
use Auth;

class HomeController extends Controller {
    
    public $profile;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show user's profile.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show() {
        $profile = Profile::where('user_id', Auth::id())->first();
        
        return view('profile', ['profile' => $profile]);
    }
}
