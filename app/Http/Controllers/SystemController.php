<?php

namespace App\Http\Controllers;
use App\Subject;
use App\System;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function listSystems()
    {
        $data = System::system()->get();
    	return view('createTest.system.systems-list', compact('data'));
    }

    public function createSystem()
    {
        $subjects = Subject::subject()->get();
    	return view('createTest.system.system-create', compact('subjects'));
    }

    public function storeSystem(Request $request)
    {
//         dd($request->all());
        $this->validate($request,[
            'subject_id' => 'required',
            'system_name' => 'required|unique:systems',
            'status' => 'required'
        ]);

        $data = new System();
        $data->subject_id = $request->subject_id;
        $data->system_name = $request->system_name;
        $data->status = $request->status;
        $data->save();
        return redirect()->back()->with('successMsg','System Successfully Saved');
    }

    public function editSystem(Request $request, $id)
    {
        $data = System::find($id);
        $subjects = Subject::subject()->get();
        return view('createTest.system.system-edit', compact('data', 'subjects'));
    }

    public function updateSystem(Request $request, $id)
    {
        // dd($request->all());
        $this->validate($request,[
            'system_name' => 'required|unique:systems,system_name,'. $request->id,
            'status' => 'required'
        ]);

        $data = System::find($id);
        $data->system_name = $request->system_name;
        $data->status = $request->status;
        $data->save();
        return redirect()->back()->with('successMsg','System Updated Successfully');
    }

    public function deleteSystem(Request $request, $id)
    {
        $data = System::find($id);
        $data->delete();
        return redirect()->back()->with('successMsg','System Deleted Successfully');
    }
}
