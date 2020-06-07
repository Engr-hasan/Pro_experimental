<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function getHelpPage()
    {
    	return view('help.help');
    }

    public function listHowToUse()
    {
    	return view('help.howToUse.list-how-to-use');
    }

    public function createHowToUse()
    {
    	return view('help.howToUse.create-how-to-use');
    }

    public function storeHowToUse()
    {
        
    }

    public function editHowToUse()
    {
        return view('help.howToUse.edit-how-to-use');
    }

    public function updateHowToUse()
    {
        return view('help.create-faq');
    }

    public function deleteHowToUse()
    {
        return view('help.create-faq');
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
