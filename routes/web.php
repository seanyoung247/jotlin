<?php


use Illuminate\Support\Facades\Route;
use App\Models\Note;



Route::get('/notes', function () {
    
    $notes = Note::all();

    return view('notes.index', [
        'notes' => $notes
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

