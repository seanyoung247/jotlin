<?php


use Illuminate\Support\Facades\Route;
use App\Models\Note;



Route::get('/', function () {
    
    $notes = Note::all();

    return view('main', [
        'notes' => $notes
    ]);
});


Route::post('/new-note', function() {
    Note::create([
        'title' => request('note-title'),
        'note' => request('note-text')
    ]);

    return redirect('/');
});



Route::get('/delete-notes', function() {
    session()->forget('notes');
    return redirect('/');
});

