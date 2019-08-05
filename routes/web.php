<?php
    
    Auth::routes(['verify' => true]);
    
    Route::get('/', function () {
        return view('welcome');
    })->middleware('guest');

    // PROFILE
    Route::group(['prefix' => '/profile', 'middleware' => 'verified'], function () {
        Route::get('/', 'LocationController@changeLocation')->name('profile');
//        Route::get('/', 'HomeController@show')->name('profile');
        Route::get('/info', 'HomeController@show')->middleware('filled_profile');
        Route::get('/viewed/profiles', 'HomeController@showViewedProfiles')->name('viewed.profiles');
        Route::get('/viewed/profiles', 'VisitController@showViewedProfiles')->name('viewed.profiles');
        Route::get('/viewed/my-profile', 'VisitController@showUsersViewedMyProfile')->name('viewed.my.profile');
        Route::get('/blocked/users', 'BlockingController@showBlockedProfiles')->name('blocked.users');
        Route::get('/liked-by-me', 'LikeController@showLikedByMeProfiles')->name('liked.by.me');
        Route::get('/liked-me', 'LikeController@showLikedMeProfiles')->name('liked.me');
        Route::get('/connections', 'ConnectionsController@showConnections')->name('connections');
        Route::post('/get/notifications', 'NotificationController@getNotifications')->name('notifications');
        Route::post('/get/notifications/count', 'NotificationController@countNotifications')->name('notifications.count');
    });

    // UPLOADING
    Route::group(['prefix' => '/upload', 'middleware' => 'verified'], function () {
        Route::post('/check/avatar', 'ImageController@checkUploadingAvatar')->name('upload.check.avatar');
        Route::post('/avatar', 'ImageController@uploadAvatar')->name('upload.avatar');
        Route::post('/photo', 'ImageController@uploadPhoto')->name('upload.photo');
    });

    // DELETING
    Route::group(['prefix' => '/delete', 'middleware' => 'verified'], function () {
        Route::delete('/avatar', 'ImageController@deleteAvatar')->name('delete.avatar');
        Route::delete('/photo/{number}', 'ImageController@deletePhoto')->name('delete.photo');
        Route::delete('/bio', 'HomeController@deleteBio')->name('delete.bio');
        Route::delete('/tag/{tag}', 'TagController@deleteTag')->name('delete.tag');
        Route::delete('/viewed/profile/{id}', 'VisitController@deleteViewedProfile')->name('delete.viewed.profile');
        Route::delete('/viewed/me/profile/{id}', 'VisitController@deleteViewedMeProfile')->name('delete.viewed.me.profile');
        Route::delete('/location', 'LocationController@turnOffLocation')->name('turn.off.location');
    });

    // SET
    Route::group(['prefix' => '/set', 'middleware' => 'verified'], function () {
        Route::put('/preferences', 'HomeController@setPreferences')->name('set.preferences');
        Route::put('/bio', 'HomeController@setBio')->name('set.bio');
        Route::put('/age', 'HomeController@setAge')->name('set.age');
        Route::put('/tag', 'TagController@setTag')->name('set.tag');
    });

    // CHANGE
    Route::group(['prefix' => '/change', 'middleware' => 'verified'], function () {
        Route::put('/name', 'HomeController@changeName')->name('change.name');
        Route::put('/surname', 'HomeController@changeSurname')->name('change.surname');
        Route::put('/gender', 'HomeController@changeGender')->name('change.gender');
        Route::put('/login', 'HomeController@changeLogin')->name('change.login');
        Route::put('/email', 'HomeController@changeEmail')->name('change.email');
        Route::put('/password', 'HomeController@changePassword')->name('change.password');
        Route::put('/location', 'LocationController@changeLocation')->name('change.location');
    });

    // FINDING
    Route::group(['prefix' => '/find', 'middleware' => 'verified'], function () {
        Route::post('/tag/matches', 'TagController@findTagMatchesAjax')->name('find.tag.matches');
    });

    // USERS
    Route::group(['prefix' => '/users', 'middleware' => 'verified'], function () {
        Route::get('/', 'UsersController@show')->name('show.all.users');
        Route::get('/{login}', 'UsersController@showUser')->name('show.certain.user')->middleware('blocked');
        Route::put('/block/{id}/{login}', 'BlockingController@blockUser')->name('block.user');
        Route::delete('/unblock/{id}/{login}', 'BlockingController@unblockUser')->name('unblock.user');
        Route::put('/like/{id}/{login}', 'LikeController@likeUser')->name('like.user');
        Route::delete('/unlike/{id}/{login}', 'LikeController@unlikeUser')->name('unlike.user');
        Route::post('/report/{id}/{login}', 'ReportController@makeReport')->name('report');
    });
    
    // SEARCHING
    Route::group(['prefix' => '/suggestions', 'middleware' => 'verified'], function () {
        Route::get('/', 'SearchController@show')->name('searching');
        Route::get('/research', 'SearchController@findFilterSort')->name('find.filter.sort');
    });
    
    // CHAT ROOM
    Route::group(['prefix' => '/chat/with', 'middleware' => 'verified'], function () {
        Route::get('/{login}', 'ChatController@showChat')->name('show.chat');
    });

    Route::get('/result', function () {
        return view('auth/successlink');
    });