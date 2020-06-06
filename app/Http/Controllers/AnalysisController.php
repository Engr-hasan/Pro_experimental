<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnalysisController extends Controller
{
    public function getAnalysisPage()
    {
    	return view('previousTest.analysis');
    }

    public function getTestAnalysisPage()
    {
    	return view('previousTest.test-analysis');
    }
}
