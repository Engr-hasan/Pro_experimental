<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function getHelpPage()
    {
    	return view('help.help');
    }

    public function createHowToUse()
    {
    	return view('help.create-how-to-use');
    }

    public function createFAQ()
    {
    	return view('help.create-faq');
    }
}
