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
    
    Route::get('/', function () {
        return view('welcome');
    })->middleware('guest');
    
    Auth::routes(['verify' => true]);
    
    Route::group(['prefix' => '/profile', 'middleware' => 'verified'], function () {
        Route::get('/', 'HomeController@show')->name('profile');
    });
    
    Route::group(['prefix' => '/upload', 'middleware' => 'verified'], function () {
        Route::post('/avatar', 'ImageController@uploadAvatar');
        Route::post('/photo', 'ImageController@uploadPhoto');
    });
    
    Route::group(['prefix' => '/delete', 'middleware' => 'verified'], function () {
        Route::delete('/avatar', 'ImageController@deleteAvatar');
        Route::delete('/photo/{number}', 'ImageController@deletePhoto');
        Route::delete('/bio', 'HomeController@deleteBio');
        Route::delete('/tag/{tag}', 'TagController@deleteTag');
    });
    
    Route::group(['prefix' => '/set', 'middleware' => 'verified'], function () {
        Route::put('/name', 'HomeController@setName');
        Route::put('/surname', 'HomeController@setSurname');
        Route::put('/gender', 'HomeController@setGender');
        Route::put('/preferences', 'HomeController@setPreferences');
        Route::put('/bio', 'HomeController@setBio');
        Route::put('/age', 'HomeController@setAge');
        Route::put('/tag', 'TagController@setTag');
    });
    
    Route::group(['prefix' => '/change', 'middleware' => 'verified'], function () {
        Route::post('/login', 'HomeController@changeLogin');
        Route::post('/email', 'HomeController@changeEmail');
        Route::post('/password', 'HomeController@changePassword');
    });
    
    Route::get('/users', 'UsersController@show')->name('users');
    Route::get('/result', function (){
        return view('auth/successlink');
    });