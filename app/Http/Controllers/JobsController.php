<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class JobsController extends Controller
{
    public function jobs()
    {
        
        $jobs = News::all();
        //return view('jobs', compact('jobOpportunities'));
        return dd($jobs);
    }
}
