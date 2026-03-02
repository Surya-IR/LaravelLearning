<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;

Route::get('/', [ChirpController::class, 'index']);

// function () {return view('welcome');

// Route::get('/home', function () {
//     return view('home');
// });