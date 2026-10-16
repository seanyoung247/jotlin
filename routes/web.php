<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    $notes = DB::table('ideas')->get();

    return view('main', [
        'notes' => $notes
    ]);
});




Route::post('/new-note', function() {
    $note = (object) [
        'title' => request('note-title'),
        'text' => request('note-text')
    ];

    session()->push('notes', $note);

    return redirect('/');
});



Route::get('/delete-notes', function() {
    session()->forget('notes');
    return redirect('/');
});

