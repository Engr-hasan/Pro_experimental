<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateTestController extends Controller
{
    public function getCreateTestPage()
    {
    	return view('createTest.create-test');
    }
}
