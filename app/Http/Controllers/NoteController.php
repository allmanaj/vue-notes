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

    public function updateNotes(Request $request){
        $notes = $request->all();
        // dd($notes);
        foreach($notes as $note){
            $n = Note::find($note['id']);
            if($n){
                print_r($n);
                $n->title = $note['title'];
                $n->body = $note['body'];
            } else {
                $n = new Note;
                $n->title = $note->title;
                $n->body = $note->body;
            }
            $n->save();
        }

        return Note::all();
    }
}
