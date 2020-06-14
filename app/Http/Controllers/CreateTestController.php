<?php

namespace App\Http\Controllers;
use App\AnswerExplanation;
use App\QuestionAnswersList;
use App\QuestionCreate;
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
        $data = [
            'subjects' => Subject::subject()->get(),
            'systems' => System::system()->get(),
            'q_modes' => QuestionMode::active()->get(),
            'q_mode_counts1' => QuestionCreate::where('question_mode_id',1)->count(),
            'q_mode_counts2' => QuestionCreate::where('question_mode_id',2)->count(),
            'q_mode_counts3' => QuestionCreate::where('question_mode_id',3)->count(),
            'q_mode_counts4' => QuestionCreate::where('question_mode_id',4)->count(),
            'q_mode_counts5' => QuestionCreate::where('question_mode_id',5)->count(),
        ];

    	return view('createTest.create-test', $data);
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


     public function createTeststore(Request $request)
     {
        dd($request->all());
     }
}
