<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthApiController;
use App\Http\Controllers\Api\EventoApiController;
use App\Http\Controllers\Api\FavoritoApiController;

Route::post('/login', [AuthApiController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthApiController::class, 'logout']);
    
    Route::get('/eventos', [EventoApiController::class, 'index']);

    Route::get('/favoritos', [FavoritoApiController::class, 'index']);
    Route::post('/favoritos', [FavoritoApiController::class, 'store']);
    Route::delete('/favoritos/{id}', [FavoritoApiController::class, 'destroy']);
});