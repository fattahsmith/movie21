<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [MovieController::class, 'index']);

// Route::get('/', function () {
//     return view('home'); // Sesuaikan nama file Blade Anda
// });


Route::get('/', [MovieController::class, 'index']);
Route::get('/movies', [MovieController::class, 'movies']);
Route::get('/tvShow', [MovieController::class, 'tvShow']);
Route::get('/search', [MovieController::class,'search']);
Route::get('/movie/{id}',[MovieController::class, 'movieDetails']);
