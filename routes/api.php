<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Post\PostController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->controller(AuthController::class)->group(function () {
    Route::post('register', 'register')->name('auth.register');
    Route::post('login', 'login')->name('auth.login');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('posts', PostController::class);
    // Route::get('posts', [PostController::class, 'index']);
    // Route::get('posts/{id}', [PostController::class, 'show']);
    // Route::post('posts', [PostController::class, 'store']);
    // Route::put('posts/{id}', [PostController::class, 'update']);
    // Route::delete('posts/{id}', [PostController::class, 'destroy']);
});
