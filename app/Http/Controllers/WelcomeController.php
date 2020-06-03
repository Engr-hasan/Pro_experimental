<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function getWelcomePage()
    {
    	return view('welcome.welcome');
    }
}
