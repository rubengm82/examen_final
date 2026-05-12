<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\RemolqueController;
use Illuminate\Support\Facades\Route;

Route::middleware('cors')->group(function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/{id}', [UserController::class, 'show']);
    Route::post('/users', [UserController::class, 'store']);
    Route::put('/users/{id}', [UserController::class, 'update']);
    Route::delete('/users/{id}', [UserController::class, 'destroy']);
    
    Route::post('/login', [UserController::class, 'login']);

    Route::get('/cars', [CarController::class, 'index']);
    Route::get('/cars/{id}', [CarController::class, 'show']);
    Route::post('/cars', [CarController::class, 'store']);
    Route::put('/cars/{id}', [CarController::class, 'update']);
    Route::delete('/cars/{id}', [CarController::class, 'destroy']);
    
    Route::get('/remolques', [RemolqueController::class, 'index']);
    Route::get('/remolques/{id}', [RemolqueController::class, 'show']);
    Route::post('/remolques', [RemolqueController::class, 'store']);
    Route::put('/remolques/{id}', [RemolqueController::class, 'update']);
    Route::delete('/remolques/{id}', [RemolqueController::class, 'destroy']);
});
