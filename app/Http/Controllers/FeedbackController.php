<?php

namespace App\Http\Controllers;
use App\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function feedbackStore(Request $request)
    {
    	// dd($request->all());
    	$this->validate($request,[
            'feedbacks' => 'required',
            'i_concern' => 'required'
        ]);

        $data = new Feedback();
        $data->gen_test_id = 1;       //gen_test_id store later after create test store.
        $data->feedbacks = $request->feedbacks;
        $data->i_concern = $request->i_concern;
        $data->status = 1;
        $data->save();
        return response()->json([
            'success' => true,
            'successMsg' => 'Feedback given done Successfully!'
        ]);
        return redirect()->back();
    }
}
