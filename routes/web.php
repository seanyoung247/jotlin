<?php


use Illuminate\Support\Facades\Route;
use App\Models\Note;


$noteIdx = function () {
    $notes = Note::all();

    return view('notes.index', [
        'notes' => $notes
    ]);
};

Route::get('/', $noteIdx);
Route::get('/notes', $noteIdx);

Route::get('/notes/{note}', function (Note $note) {
    return view('notes.note', [
        'note' => $note
    ]);
});

Route::post('/notes', function() {
    Note::create([
        'title' => request('note-title'),
        'note' => request('note-text')
    ]);

    return redirect('/notes');
});



Route::get('/delete-notes', function() {
    Idea::truncate();
    return redirect('/notes');
});

