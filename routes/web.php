<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/directors',DirectorController::class);
Route::resource('/genres',GenreController::class);
Route::resource('/movies',MovieController::class);