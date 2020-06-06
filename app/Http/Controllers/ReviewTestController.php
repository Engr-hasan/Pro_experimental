<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewTestController extends Controller
{
    public function getReviewTestPage()
    {
    	return view('previousTest.review-test');
    }
}
