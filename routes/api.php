<?php

use App\Http\Controllers\AIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/generate-ai-response', [AIController::class, 'generateResponse']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
