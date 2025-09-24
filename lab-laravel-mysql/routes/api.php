<?php

use App\Http\Controllers\CatController;
use App\Http\Controllers\DogController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/cats', [CatController::class, 'get']);
Route::post('/cats', [CatController::class, 'store']);
Route::get('/cats/{id}', [CatController::class, 'show']);
Route::put('/cats/{id}', [CatController::class, 'update']);
Route::delete('/cats/{id}', [CatController::class, 'destroy']);

Route::get('/dogs', [DogController::class, 'get']);
Route::post('/dogs', [DogController::class, 'store']);
Route::get('/dogs/{id}', [DogController::class, 'show']);
Route::put('/dogs/{id}', [DogController::class, 'update']);
Route::delete('/dogs/{id}', [DogController::class, 'destroy']);