<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AIController;

Route::post('/gen-ai', [AIController::class, 'generateResponse']);

Route::get('/', function () {
    return view('welcome');
});
