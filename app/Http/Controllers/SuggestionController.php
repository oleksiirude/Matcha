<?php

    namespace App\Http\Controllers;
    
    class SuggestionController extends Controller {
        
        public function show() {
            return view('searching-profiles.suggestions');
        }
    }
