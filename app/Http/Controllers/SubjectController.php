<?php

namespace App\Http\Controllers;
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
    	return view('createTest.subject.subject-create');
    }

    public function storeSubject(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'subject_name' => 'required|unique',
            'status' => 'required'
        ]);

        $data = new Subject();
        $data->subject_name = $request->subject_name;
        $data->status = $request->status;
        $data->save();
        return redirect()->back()->with('successMsg','Subject Successfully Saved');
    }

    public function editSubject(Request $request, $id)
    {
        $data = Subject::find($id);
        return view('createTest.subject.subject-edit', compact('data'));
    }

    public function updateSubject(Request $request, $id)
    {
        // dd($request->all());
        $this->validate($request,[
            'subject_name' => 'required|unique',
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
