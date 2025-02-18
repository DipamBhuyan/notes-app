<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('notes.index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// Instead of individual routes, you can use Route::resource
Route::resource('notes', NoteController::class);

Route::get('/notes', [NoteController::class, 'index']);

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

?>