<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultsController extends Controller
{
    public function getResultsPage()
    {
    	return view('previousTest.results');
    }
}
