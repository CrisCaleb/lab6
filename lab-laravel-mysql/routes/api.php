<?php

use App\Http\Controllers\CatController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/cats', [CatController::class, 'get']);
Route::post('/cats', [CatController::class, 'store']);