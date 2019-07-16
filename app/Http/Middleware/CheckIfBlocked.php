<?php

    namespace App\Http\Middleware;
    
    use App\Ban;
    use App\User;
    use Auth;
    use Closure;
    
    class CheckIfBlocked
    {
        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Closure  $next
         * @return mixed
         */
        public function handle($request, Closure $next)  {
            $user = User::where('login', $request->login)->first();
            
            if (!$user)
                abort(419);
            
            if (Ban::where([
                'user' => $user->id,
                'banned' => Auth::id()
            ])->first())
                return response(view('messages.user-blocked-you', ['user' => $request->login]));
            
            return $next($request);
        }
    }
