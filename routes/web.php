<?php
    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */
    
    use Illuminate\Http\Request;
    
    Route::get('/', function () {
        return view('welcome');
    })->middleware('guest');
    
    Auth::routes(['verify' => true]);
    
    Route::get('/profile', 'HomeController@show')->name('profile')->middleware('verified');
    
    Route::post('/upload/avatar', 'ImageController@uploadAvatar');
    Route::post('/upload/photo', 'ImageController@uploadPhoto');
    Route::delete('/delete/avatar', 'ImageController@deleteAvatar');
    Route::delete('/delete/photo/{number}', 'ImageController@deletePhoto');
    
    Route::put('/set/name', 'HomeController@setName');
    Route::put('/set/surname', 'HomeController@setSurname');
    Route::put('/set/gender', 'HomeController@setGender');
    Route::put('/set/preferences', 'HomeController@setPreferences');
    Route::put('/set/bio', 'HomeController@setBio');
    Route::put('/set/age', 'HomeController@setAge');
    
    Route::post('/change/login', 'HomeController@changeLogin');
    Route::post('/change/email', 'HomeController@changeEmail');
    Route::post('/change/password', 'HomeController@changePassword');
    
    Route::get('/users', 'UsersController@show')->name('users')->middleware('verified');
    
    Route::get('/result', function (){
        return view('auth/successlink');
    });