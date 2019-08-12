<?php

    namespace App\Http\Controllers;

    use Auth;
    use App\Report;
    use Carbon\Carbon;

    class ReportController extends Controller {

        public function makeReport($id, $login) {
            Controller::validateUser($id, $login);
    
            if (!Report::where([
                'user' => Auth::id(),
                'reported' => $id
            ])->first())
                Report::create([
                    'user' => Auth::id(),
                    'reported' => $id,
                    'date' => Carbon::now()
                ]);

            return response()->json(['result' => true]);
        }
    }
