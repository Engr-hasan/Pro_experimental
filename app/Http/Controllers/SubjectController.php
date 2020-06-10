<?php

namespace App\Http\Controllers;
use App\QuestionMode;
use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function listSubjects()
    {
        $data = Subject::latest()->get();
    	return view('createTest.subject.subjects-list', compact('data'));
    }

    public function createSubject()
    {
        $q_modes = QuestionMode::active()->get();
    	return view('createTest.subject.subject-create', compact('q_modes'));
    }

    public function storeSubject(Request $request)
    {
        $this->validate($request,[
            'question_mode_id' => 'required',
            'subject_name' => 'required|unique:subjects',
            'status' => 'required'
        ]);

        $data = new Subject();
        $data->question_mode_id = $request->question_mode_id;
        $data->subject_name = $request->subject_name;
        $data->status = $request->status;
        $data->save();
        return redirect()->back()->with('successMsg','Subject Successfully Saved');
    }

    public function editSubject(Request $request, $id)
    {
        $data = Subject::find($id);
        $q_modes = QuestionMode::active()->get();
        return view('createTest.subject.subject-edit', compact('data', 'q_modes'));
    }

    public function updateSubject(Request $request, $id)
    {
        // dd($request->all());
        $this->validate($request,[
            'subject_name' => 'required|unique:subjects,subject_name,' . $request->id,
            'status' => 'required'
        ]);

        $data = Subject::find($id);
        $data->subject_name = $request->subject_name;
        $data->status = $request->status;
        $data->save();
        return redirect()->back()->with('successMsg','Subject Updated Successfully');
    }

    public function deleteSubject(Request $request, $id)
    {
        $data = Subject::find($id);
        $data->delete();
        return redirect()->back()->with('successMsg','Subject Deleted Successfully');
    }
}
