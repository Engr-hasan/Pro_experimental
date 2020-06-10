<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\QuestionAnswersList;
use App\QuestionCreate;
use Illuminate\Http\Request;

class QuestionAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions  = QuestionCreate::active()->get();
        $answers = QuestionAnswersList::with('question')->get();
//        dd($answers);
        return view('backend.question-answer.list',compact( 'questions','answers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
           'question_create_id' => 'required',
            'answer' => 'required|unique:question_answers_lists',
            'status' => 'required',
        ]);

        $answer = new QuestionAnswersList();
        $answer->fill($request->all());
        $answer->save();
        return redirect()->back();
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
        $answer = QuestionAnswersList::find($id);
        $questions = QuestionCreate::active()->get();
        return view('backend.question-answer.edit', compact('questions','answer'));
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
            'question_create_id' => 'required',
            'answer' => 'required|unique:question_answers_lists,answer,'.$id,
            'status' => 'required',
        ]);

        $answer = QuestionAnswersList::find($id);
        $answer->fill($request->all());
        $answer->update();
        return redirect()->route('question-answer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        QuestionAnswersList::find($id)->delete();
        return redirect()->back();
    }
}
