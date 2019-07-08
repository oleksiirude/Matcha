<?php

    namespace App;
    
    use App\Notifications\SendRegisterConfirmEmail;
    use App\Notifications\SendRecoverPasswordEmail;
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    
    class User extends Authenticatable implements MustVerifyEmail {
        use Notifiable;
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'login', 'email', 'password'
        ];
    
        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */
        protected $hidden = [
            'password', 'remember_token',
        ];
    
        /**
         * The attributes that should be cast to native types.
         *
         * @var array
         */
        protected $casts = [
            'email_verified_at' => 'datetime',
        ];
    
        /**
         * Override default method sendEmailVerificationNotification Illuminate/Auth/Listeners/SendEmailVerificationNotification
         */
        public function sendEmailVerificationNotification() {
            $this->notify(new SendRegisterConfirmEmail());
        }
    
        /**
         * Override default method sendPasswordResetNotification Illuminate/Auth/Passwords/CanResetPassword
         *
         * @param  string  $token
         */
        public function sendPasswordResetNotification($token) {
            $this->notify(new SendRecoverPasswordEmail($token));
        }
        
    }
