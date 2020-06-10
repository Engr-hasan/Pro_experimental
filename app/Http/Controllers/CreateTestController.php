<?php

namespace App\Http\Controllers;
use App\Subject;
use App\System;
use Illuminate\Http\Request;

class CreateTestController extends Controller
{
    public function getCreateTestPage()
    {
    	$subjects = Subject::where('status',1)->latest()->get();
    	$systems = System::where('status',1)->latest()->get();
    	// dd($subjects);
    	// dd($systems);
    	return view('createTest.create-test', compact('subjects', 'systems'));
    }

    public function getTestPage()
    {
    	return view('createTest.generate-test');
    }
}
