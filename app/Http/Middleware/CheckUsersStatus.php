<?php

    namespace App\Http\Middleware;
    
    use App\User;
    use Closure;
    use Auth;
    use Cache;
    use Carbon\Carbon;
    
    class CheckUsersStatus
    {
        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Closure  $next
         * @return mixed
         */
        public function handle($request, Closure $next) {
            
            if (Auth::check()) {
                $this->setLastActivity(Auth::user()->id);
                $expiresAt = Carbon::now()->addMinutes(1);
                Cache::put('user-is-online-' . Auth::user()->id, true, $expiresAt);
            }
            return $next($request);
        }
        
        protected function setLastActivity($id) {
            $model = User::find($id);
    
            $model->update([
                'last_activity' => Carbon::now()
            ]);
        }
    }
