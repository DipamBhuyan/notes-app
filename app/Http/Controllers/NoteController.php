<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);
        $title=$request->title;
        $description = $request->description;
        Note::create(['title'=>$title, 'description'=>$description]);
        //Note::create($request->only(['title', 'description']));

        return redirect('/notes')->with('success', 'Note created successfully!');
    }

    public function update(Request $request, Note $note)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $note->update($request->only(['title', 'description']));

        return redirect('/notes')->with('success', 'Note updated successfully!');
    }

    public function destroy(Note $note)
    {
        $note->delete();
        return redirect('/notes')->with('success', 'Note deleted successfully!');
    }
}
