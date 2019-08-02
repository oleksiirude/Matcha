<?php

    namespace App\Http\Controllers;
    
    use Auth;
    use App\Notification;

    class NotificationController extends Controller {
        
        public function getNumberOfUnreadNotifications() {
            $unread = Notification::where([
                'user_id' => Auth::id(),
                'read' => false
            ])->get()->count();
            
            return response()->json(['count' => $unread]);
        }
        
        public function getNotifications() {
            $notifications = Notification::select('login', 'link', 'title', 'read', 'date')
                                            ->where('user_id', Auth::id())
                                            ->get();
            
            Notification::where([
                'user_id' => Auth::id(),
                'read' => false
                ])->update(['read' => true]);
    
            return response()->json(['count' => $notifications]);
        }
    }
 