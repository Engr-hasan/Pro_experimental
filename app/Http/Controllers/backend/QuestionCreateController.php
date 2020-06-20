<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\QuestionCreate;
use App\QuestionMode;
use App\Subject;
use App\System;
use App\TestMode;
use Illuminate\Http\Request;

class QuestionCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = QuestionCreate::all();
        return view('backend.question-create.list',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modes = QuestionMode::active()->get();
        $systems = System::active()->get();
        $subjects = Subject::subject()->get();
        return view('backend.question-create.create',compact('systems','subjects', 'modes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'question'=>'required',
//           'test_mode_type'=>'required',
//           'question_mode_id'=>'required',
           'subject_id'=>'required',
           'system_id'=>'required',
           'status' => 'required',
        ]);

        $question = new QuestionCreate();
        $question->fill($request->all());
        $question->save();

        return redirect()->route('question-create.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = QuestionCreate::find($id);
        $modes = QuestionMode::active()->get();
        $systems = System::active()->get();
        $subjects = Subject::subject()->get();
        return view('backend.question-create.edit',compact('question','modes', 'systems', 'subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'question'=>'required',
            'status' => 'required',
        ]);

        $question = QuestionCreate::find($id);
        $question->fill($request->all());
        $question->update();
        return redirect()->route('question-create.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = QuestionCreate::find($id);
        $question->delete();
        return redirect()->back();
    }
}
