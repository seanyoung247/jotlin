<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::all();

        return view('notes.index', [
            'notes' => $notes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'note-title' => ['required'],
            'note-text' => ['required']
        ]);

        Note::create([
            'title' => $request['note-title'],
            'note' => $request['note-text']
        ]);

        return redirect('/notes');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        return view('notes.edit', [
            'note' => $note
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        $note->update([
            'title' => $request['note-title'],
            'note' => $request['note-text']
        ]);

        return redirect("/notes");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect('/notes');   
    }
}
