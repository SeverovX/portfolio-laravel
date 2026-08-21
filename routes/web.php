<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController; // <-- THIS IS THE LINE YOU WERE MISSING!

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
