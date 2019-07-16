<?php

namespace App\Http\Controllers;

use App\Ban;
use App\Like;
use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function validateUser($id, $login) {
        $result = User::where([
            'id' => $id,
            'login' => $login
        ])->get();
        
        if (!count($result))
            abort(419);
    }
    
    public function checkIfBlocked($banned, $user) {
        if (Ban::where([
            'user' => $user,
            'banned' => $banned
        ])->first())
            return true;
        return false;
    }
    
    public function checkIfLiked($liked, $user) {
        if (Like::where([
            'user' => $user,
            'liked' => $liked
        ])->first())
            return true;
        return false;
    }
    
    public function checkIfConnected($liked, $user) {
        if (Like::where([
                'user' => $user,
                'liked' => $liked
            ])->first() &&
                Like::where([
                    'user' => $liked,
                    'liked' => $user
                ])->first())
            return true;
        return false;
    }
    
    public function getFineActivityView($diff, $last, $time) {
        switch ($diff) {
            case $diff === 1:
                return 'a few seconds ago';
            case $diff === 2:
                return 'one minute ago';
            case $diff < 6:
                return 'a few minutes ago';
            case $diff > 6 && $diff < 60:
                return $diff . ' minutes ago';
            case $diff > 60 && $diff < 120:
                return 'one hour ago';
            case $diff > 120 && $diff < 1440:
                return (int)($diff / 60) . ' hours ago';
        }
        return $last->toFormattedDateString() . ' at ' . $time;
    }
    
    protected function increaseRating($profile) {
        if ($profile->rating < 100) {
            $profile->increment('rating', 0.5);
            if ($profile->rating >= 100)
                $profile->rating = 100;
        }
    }
}
