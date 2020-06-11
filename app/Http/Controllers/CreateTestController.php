<?php

namespace App\Http\Controllers;
use App\QuestionMode;
use App\Subject;
use App\System;
use App\ApperanceColor;
use DB;
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

    public function getTestPage()
    {
        $color = ApperanceColor::orderBy('id', 'desc')->first();
        // dd($color);
    	return view('createTest.generate-test', compact('color'));
    }

    public function store(Request $request)
     {
        $color = new ApperanceColor();
        $color->apperance_color = $request->apperance_color;
        $color->save();
        return response()->json(['success'=>'Theme Color is Changed']);
     }
}
