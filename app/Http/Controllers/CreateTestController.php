<?php

namespace App\Http\Controllers;
use App\QuestionMode;
use App\Subject;
use App\System;
use Illuminate\Http\Request;

class CreateTestController extends Controller
{
    public function getCreateTestPage()
    {
    	$subjects = Subject::subject()->get();
    	$systems = System::system()->get();
    	$q_modes = QuestionMode::active()->get();
    	return view('createTest.create-test', compact('subjects', 'systems', 'q_modes'));
    }
}
