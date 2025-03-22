<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $page = 'Home';
        return view('home')
        ->with('data', $page)
        ->with('notes', Note::all());
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'note' => 'required'
        ]);

        Note::create(['note' => $validatedData['note']]);

        return redirect()->back()->with('success', 'Note saved successfully! ');

    }

    public function edit($id) {
        $note = Note::find($id);
        return view('home')
                    ->with('data', 'Home')
                    ->with('notes', Note::all())
                    ->with('note', $note);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'note' => 'required'
        ]);
        
        $note = Note::find($id);
        $note->note = $request->note;
        $note->save(); 
        return redirect('/');
    }

    public function delete($id) {
        $note = Note::find($id);
        $note->delete();

        return redirect('/');
    }
}
