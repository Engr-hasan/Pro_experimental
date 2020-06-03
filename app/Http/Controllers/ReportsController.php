<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function getReportsPage()
    {
    	return view('performance.reports.reports');
    }
}
