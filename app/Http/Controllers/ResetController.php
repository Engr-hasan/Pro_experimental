<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResetController extends Controller
{
    public function getResetPage()
    {
    	return view('reset.reset');
    }
}
