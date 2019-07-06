<?php
    
    /*
    |--------------------------------------------------------------------------
    | SendRegisterConfirmEmail
    |--------------------------------------------------------------------------
    | push sendRegisterConfirmNotification in a queue
    */
    
    namespace App\Notifications;
    
    use Illuminate\Bus\Queueable;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Auth\Notifications\VerifyEmail;
    
    class SendRegisterConfirmEmail extends VerifyEmail implements ShouldQueue {
        use Queueable;
    }
