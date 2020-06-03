<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function getNotesPage()
    {
    	return view('notes.notes');
    }
}
