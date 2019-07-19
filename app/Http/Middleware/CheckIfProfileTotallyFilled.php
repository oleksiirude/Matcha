<?php

    namespace App\Http\Middleware;
    
    use App\Http\Controllers\HomeController;
    use App\Interest;
    use Auth;
    use App\Profile;
    
    class CheckIfProfileTotallyFilled
    {
        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Closure  $next
         * @return mixed
         */
        public function handle() {
            $interests = Interest::where('user_id', Auth::id())->first();
            
            if (!$interests)
                return response(HomeController::show());
    
            $profile = Profile::find(Auth::id());
            $profile = $profile->getAttributes();
            
            foreach ($profile as $cell)
                if (!$cell)
                    return response(HomeController::show());
                
            return redirect('/suggestions');
        }
    }
