<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsAndConditionsController extends Controller
{
    public function privacy() {

        return view('terms_and_conditions');
        
    }
}
