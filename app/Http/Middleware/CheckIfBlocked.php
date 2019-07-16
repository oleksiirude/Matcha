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
                return response()->json([
                    'result' => false,
                    'error' => 'You cannot view this profile, user ' . auth()->user()->login . ' blocked you'
                ]);
            
            return $next($request);
        }
    }
