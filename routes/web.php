<?php

use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;
use App\Models\Note;


Route::get('/', [NoteController::class, 'index']);

Route::get('/notes', [NoteController::class, 'index']);
Route::get('/notes/{note}/edit', [NoteController::class, 'edit']);
Route::patch('/notes/{note}', [NoteController::class, 'update']);
Route::post('/notes', [NoteController::class, 'store']);
Route::delete('/notes/{note}', [NoteController::class, 'destroy']);


Route::get('/register', [UserController::class, 'create']);
Route::post('/register', [UserController::class, 'store']);