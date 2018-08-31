<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class NoteController extends Controller
{
    public function index(){
    	return view('notes.main');
    }

    public function allNotes(){
    	$notes = Note::select('id', 'title', 'body')->get()->map(function($note){
    		$note->selected = false;
    		return $note;
    	});
    	return $notes;
    }
}
