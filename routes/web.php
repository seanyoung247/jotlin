<?php


use Illuminate\Support\Facades\Route;
use App\Models\Note;


$noteIdx = function () {
    $notes = Note::all();

    return view('notes.index', [
        'notes' => $notes
    ]);
};

// All
Route::get('/', $noteIdx);
Route::get('/notes', $noteIdx);

// Show Single
Route::get('/notes/{note}', function (Note $note) {
    return view('notes.note', [
        'note' => $note
    ]);
});

// Edit Form
Route::get('/notes/{note}/edit', function (Note $note) {
    return view('notes.edit', [
        'note' => $note
    ]);
});

// Update
Route::patch('/notes/{note}', function (Note $note) {
    $note->update([
        'title' => request('note-title'),
        'note' => request('note-text')
    ]);

    return redirect("/notes/{$note->id}");
});

// Add New
Route::post('/notes', function() {
    Note::create([
        'title' => request('note-title'),
        'note' => request('note-text')
    ]);

    return redirect('/notes');
});

// Delete
Route::delete('/notes/{note}', function (Note $note) {
    $note->delete();
    return redirect('/notes');   
});