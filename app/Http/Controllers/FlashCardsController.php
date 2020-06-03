<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashCardsController extends Controller
{
    public function getFlashCardsPage()
    {
    	return view('flashCards.flash-cards');
    }
}
