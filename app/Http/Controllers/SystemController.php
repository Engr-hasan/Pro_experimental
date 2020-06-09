<?php

namespace App\Http\Controllers;
use App\System;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function listSystems()
    {
        $data = System::latest()->get();
    	return view('createTest.system.systems-list', compact('data'));
    }

    public function createSystem()
    {
    	return view('createTest.system.system-create');
    }

    public function storeSystem(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'system_name' => 'required',
            'status' => 'required'
        ]);

        $data = new System();
        $data->system_name = $request->system_name;
        $data->status = $request->status;
        $data->save();
        return redirect()->back()->with('successMsg','System Successfully Saved');
    }

    public function editSystem(Request $request, $id)
    {
        $data = System::find($id);
        return view('createTest.system.system-edit', compact('data'));
    }

    public function updateSystem(Request $request, $id)
    {
        // dd($request->all());
        $this->validate($request,[
            'system_name' => 'required',
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
