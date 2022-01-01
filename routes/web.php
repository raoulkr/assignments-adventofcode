<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'index']);
Route::get('/day1', [PagesController::class, 'day1']);
Route::get('/day2', [PagesController::class, 'day2']);
Route::get('/day3', [PagesController::class, 'day3']);
Route::get('/day4', [PagesController::class, 'day4']);
