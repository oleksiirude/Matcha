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

    // PROFILE
    Route::group(['prefix' => '/profile', 'middleware' => 'verified'], function () {
        Route::get('/', 'HomeController@show')->name('profile');
        Route::get('/viewed/profiles', 'VisitController@showViewedProfiles')->name('viewed.profiles');
        Route::get('/viewed/my-profile', 'VisitController@showUsersViewedMyProfile')->name('viewed.my.profile');
    });

    // UPLOADING
    Route::group(['prefix' => '/upload', 'middleware' => 'verified'], function () {
        Route::post('/avatar', 'ImageController@uploadAvatar')->name('upload.avatar');
        Route::post('/photo', 'ImageController@uploadPhoto')->name('upload.photo');
    });

    // DELETING
    Route::group(['prefix' => '/delete', 'middleware' => 'verified'], function () {
        Route::delete('/avatar', 'ImageController@deleteAvatar')->name('delete.avatar');
        Route::delete('/photo/{number}', 'ImageController@deletePhoto')->name('delete.photo');;
        Route::delete('/bio', 'HomeController@deleteBio')->name('delete.bio');
        Route::delete('/tag/{tag}', 'TagController@deleteTag')->name('delete.tag');
        Route::delete('/viewed/profile/{id}', 'VisitController@deleteViewedProfile')->name('delete.viewed.profile');
        Route::delete('/viewed/me/profile/{id}', 'VisitController@deleteViewedMeProfile')->name('delete.viewed.me.profile');
    });

    // SET
    Route::group(['prefix' => '/set', 'middleware' => 'verified'], function () {
        Route::put('/name', 'HomeController@setName')->name('set.name');
        Route::put('/surname', 'HomeController@setSurname')->name('set.surname');
        Route::put('/gender', 'HomeController@setGender')->name('set.gender');
        Route::put('/preferences', 'HomeController@setPreferences')->name('set.preferences');
        Route::put('/bio', 'HomeController@setBio')->name('set.bio');
        Route::put('/age', 'HomeController@setAge')->name('set.age');
        Route::put('/tag', 'TagController@setTag')->name('set.tag');
    });

    // CHANGE
    Route::group(['prefix' => '/change', 'middleware' => 'verified'], function () {
        Route::post('/login', 'HomeController@changeLogin')->name('change.login');
        Route::post('/email', 'HomeController@changeEmail')->name('change.email');;
        Route::post('/password', 'HomeController@changePassword')->name('change.password');;
    });

    // FINDING
    Route::group(['prefix' => '/find', 'middleware' => 'verified'], function () {
        Route::post('/tag/matches', 'TagController@findTagMatches')->name('find.tag.matches');
    });

    // USERS
    Route::group(['prefix' => '/users', 'middleware' => 'verified'], function () {
        Route::get('/', 'UsersController@show')->name('show.all.users');
        Route::get('/{login}', 'UsersController@showUser')->name('show.certain.user');
    });

    Route::get('/result', function () {
        return view('auth/successlink');
    });