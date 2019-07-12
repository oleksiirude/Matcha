<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;

class UsersController extends Controller
{
    public function show() {
        
        $users = User::select()->get();
        
        foreach ($users as $user) {
            if (!$user->isOnline()) {
                $now = Carbon::now();
                $last = Carbon::parse($user->last_activity);
                $diff = $now->diffInMinutes($last, true);
                $user->last_activity = $this->getFineActivityView($diff, $last);
            }
            $data[] = $user;
        }
        return view('users', ['users' => $users]);
    }
    
    public function getFineActivityView($diff, $last) {
        
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
        return $last->toFormattedDateString();
    }
}
