<?php

    namespace App\Http\Controllers;
    
    use App\Profile;
    use Auth;
    use App\Notification;

    class NotificationController extends Controller {
        
        public function countNotifications() {
            $nb = Notification::where([
                'user_id' => Auth::id(),
            ])->get()->count();
            
            return response()->json(['count' => $nb]);
        }
        
        public function getNotifications() {
            $notifications = Notification::select('login', 'link', 'title', 'message', 'counter', 'date')
                                            ->where('user_id', Auth::id())->get();
            
            $i = 0;
            foreach ($notifications as $notification) {
                if ($notification->message && $notification->counter > 1) {
                    $notification->title = 'sent you ' . $notification->counter . ' messages';
                    $notifications[$i] = $notification;
                }
                $i++;
            }
            
            Notification::destroy(Auth::id());
    
            return response()->json(['notifications' => $notifications]);
        }
        
        public function changeNotificationsMode() {
            $mode = Profile::find(Auth::id());
    
            $mode->email_notifications = $mode->email_notifications ? false : true;
            $mode->save();
        }
    }
 