<?php

namespace App\Http\Controllers\backend;

use App\AnswerExplanation;
use App\Http\Controllers\Controller;
use App\QuestionAnswersList;
use App\QuestionCreate;
use Illuminate\Http\Request;

class AnswerExplanationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $explanations = AnswerExplanation::with('question','answer')->latest()->get();
        return view('backend.answer-explanation.list',compact('explanations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $questions = QuestionCreate::active()->get();
        $answers = QuestionAnswersList::active()->get();
        return view('backend.answer-explanation.create', compact('questions', 'answers'));
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
           'question_answer_list_id' => 'required',
           'topic' => 'required',
           'explanation' => 'required',
           'status' => 'required',
        ]);

        $explanation = new AnswerExplanation();
        $explanation->fill($request->except('statistics', 'time_spent', 'last_update', 'image_url'));
        $explanation->save();

        return redirect()->route('answer-explanation.index');
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
        $questions = QuestionCreate::active()->get();
        $answers = QuestionAnswersList::active()->correctAnswer()->get();
        $explanation = AnswerExplanation::find($id);
        return view('backend.answer-explanation.edit',compact('questions', 'answers', 'explanation'));
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
            'question_answer_list_id' => 'required',
            'topic' => 'required',
            'explanation' => 'required',
            'status' => 'required',
        ]);

        $explanation = new AnswerExplanation();
        $explanation->fill($request->except('statistics', 'time_spent', 'last_update', 'image_url'));
        $explanation->update();

        return redirect()->route('answer-explanation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AnswerExplanation::find($id)->delete();
        return redirect()->back();  
    }

    //Get Answer function
    public function get_answer(Request $request){
        $answers = QuestionAnswersList::where('question_create_id', $request->id)
                                        ->where('correct_answer',1)->get();
        $option = '<option selected disabled hidden value=""> Select One</option>';
        foreach ($answers as $menu) {
            $option = $option . '<option value="' . $menu->id . '">' . $menu->answer . '</option>';
        }
        return response()->json($option);
    }
}
