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
                $id = Auth::user()->id;
                
                if (!Cache::has('user-is-online-' . $id)) {
                    User::find($id)->update(['last_activity' => Carbon::now()]);
                    $expiresAt = Carbon::now()->addMinutes(1);
                    Cache::put('user-is-online-' . $id, true, $expiresAt);
                }
            }
            return $next($request);
        }
    }
