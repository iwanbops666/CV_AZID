<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;

Route::get('/', [CvController::class, 'index']);

// Alias route if they still want /cv
Route::get('/cv', [CvController::class, 'index']);