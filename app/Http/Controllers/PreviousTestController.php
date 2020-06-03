<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreviousTestController extends Controller
{
    public function getPreviousTestPage()
    {
    	return view('previousTest.previous-test');
    }
}
