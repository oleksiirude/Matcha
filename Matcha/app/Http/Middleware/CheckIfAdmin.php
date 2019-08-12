<?php

    namespace App\Http\Middleware;

    use App\Report;
    use App\User;
    use Auth;
    use Closure;

    class CheckIfAdmin
    {
        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Closure  $next
         * @return mixed
         */
        public function handle($request, Closure $next) {

            if ($request->getPathInfo() === "/logout")
                return $next($request);

            if (Auth::id() === 1) {
                $reports = Report::all();

                foreach ($reports as $report) {
                    $user = User::where('id', $report->user)->first();
                    $reported = User::where('id', $report->reported)->first();
                    $report['login_who'] = $user->login;
                    $report['login_whom'] = $reported->login;
                }

                return response(view('admin.admin', ['reports' => $reports]));
            }

            return $next($request);
        }
    }