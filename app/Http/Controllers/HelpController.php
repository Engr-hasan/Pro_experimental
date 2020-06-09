<?php

namespace App\Http\Controllers;
use App\HowToUse;
use App\Faq;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function getHelpPage()
    {
        $howToUse = HowToUse::where('status',1)->latest()->get();
        $faq = Faq::where('status',1)->latest()->get();
        // dd($howToUse,$faq);
    	return view('help.help', compact('howToUse','faq'));
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
        $data = Faq::latest()->get();
        return view('help.faq.faq-list', compact('data'));
    }

    public function createFAQ()
    {
        return view('help.faq.faq-create');
    }

    public function storeFaq(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'faq_title' => 'required',
            'faq_description' => 'required',
            'status' => 'required'
        ]);

        $data = new Faq();
        $data->faq_title = $request->faq_title;
        $data->faq_description = $request->faq_description;
        $data->status = $request->status;
        $data->save();
        return redirect()->back()->with('successMsg','FAQ Successfully Saved');
    }

    public function editFaq(Request $request, $id)
    {
        $data = Faq::find($id);
        return view('help.faq.faq-edit', compact('data'));
    }
    
    public function updateFaq(Request $request, $id)
    {
        // dd($request->all());
        $this->validate($request,[
            'faq_title' => 'required',
            'faq_description' => 'required',
            'status' => 'required'
        ]);

        $data = Faq::find($id);
        $data->faq_title = $request->faq_title;
        $data->faq_description = $request->faq_description;
        $data->status = $request->status;
        $data->save();
        return redirect()->back()->with('successMsg','FAQ Updated Successfully');
    }

    public function deleteFaq(Request $request, $id)
    {
        $data = Faq::find($id);
        $data->delete();
        return redirect()->back()->with('successMsg','FAQ Deleted Successfully');
    }
}
