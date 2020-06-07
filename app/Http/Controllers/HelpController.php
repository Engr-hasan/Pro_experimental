<?php

namespace App\Http\Controllers;
use App\HowToUse;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function getHelpPage()
    {
    	return view('help.help');
    }

    public function listHowToUse()
    {
        $data = HowToUse::latest()->get();
    	return view('help.howToUse.list-how-to-use', compact('data'));
    }

    public function createHowToUse()
    {
    	return view('help.howToUse.create-how-to-use');
    }

    public function storeHowToUse(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'how_to_use_title' => 'required',
            'how_to_use_description' => 'required',
            'status' => 'required'
        ]);

        $data = new HowToUse();
        $data->how_to_use_title = $request->how_to_use_title;
        $data->how_to_use_description = $request->how_to_use_description;
        $data->status = $request->status;
        $data->save();
        return redirect()->back()->with('successMsg','HowToUse Successfully Saved');
    }

    public function editHowToUse(Request $request, $id)
    {
        $data = HowToUse::find($id);
        return view('help.howToUse.edit-how-to-use', compact('data'));
    }

    public function updateHowToUse(Request $request, $id)
    {
        // dd($request->all());
        $this->validate($request,[
            'how_to_use_title' => 'required',
            'how_to_use_description' => 'required',
            'status' => 'required'
        ]);

        $data = HowToUse::find($id);
        $data->how_to_use_title = $request->how_to_use_title;
        $data->how_to_use_description = $request->how_to_use_description;
        $data->status = $request->status;
        $data->save();
        return redirect()->back()->with('successMsg','HowToUse Updated Successfully');
    }

    public function deleteHowToUse(Request $request, $id)
    {
        $data = HowToUse::find($id);
        $data->delete();
        return redirect()->back()->with('successMsg','HowToUse Deleted Successfully');
    }

    public function listFaq()
    {
        return view('help.faq.faq-list');
    }

    public function createFAQ()
    {
        return view('help.faq.faq-create');
    }

    public function storeFaq()
    {
        return view('help.create-faq');
    }

    public function editFaq()
    {
        return view('help.faq.faq-edit');
    }
    
    public function updateFaq()
    {
        return view('help.create-faq');
    }

    public function deleteFaq()
    {
        return view('help.create-faq');
    }
}
