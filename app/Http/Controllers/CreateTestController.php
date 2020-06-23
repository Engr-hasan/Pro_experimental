<?php

namespace App\Http\Controllers;
use App\AnswerExplanation;
use App\QuestionAnswersList;
use App\QuestionCreate;
use App\QuestionMode;
use App\Questions;
use App\Subject;
use App\System;
use App\ApperanceColor;
use DB;
use Illuminate\Http\Request;

class CreateTestController extends Controller
{
    public function subIdGet(Request $request)
     {
        $getSubWiseSys = Questions::where('question_subject', $request->question_subject)->where('status',1)->get('question_system')->count();
        // dd($getSubWiseSys);
     }

     public function sysIdGet(Request $request)
     {
        $getSysWiseData = Questions::where('question_system', $request->question_system)->where('status',1)->get('question_system')->count();
        // dd($getSysWiseData);
     }

    public function getCreateTestPage()
    {
        $allQuestions = Questions::all()->count();
        $unused = Questions::where('status',1)->get()->count();
        $incorrect = Questions::where('status',2)->get()->count();
        $marked = Questions::where('status',3)->get()->count();
        $subjects = Subject::where('status',1)->get();
        $systems = System::where('status',1)->get();
        // $getSubWiseSys = $this->subIdGet();
        // $getSysWiseData = $this->sysIdGet();
        // dd($getSubWiseSys);
    	return view('createTest.create-test', compact('allQuestions','unused','incorrect','marked','subjects','systems')); //,'getSubWiseSys','getSysWiseData'
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
