<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


Route::get('/', [PagesController::class, 'index']);
Route::get('/day-1', [PagesController::class, 'day1']);
Route::get('/day-2', [PagesController::class, 'day2']);
Route::get('/day-4', [PagesController::class, 'day4']);