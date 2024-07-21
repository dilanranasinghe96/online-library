<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', [AuthController::class, 'user']);
    Route::post('logout', [AuthController::class, 'logout']);

    Route::post('borrow/{id}', [BookController::class, 'borrowBook']);
    Route::post('return/{id}', [BookController::class, 'returnBook']);

    Route::apiResource('books', BookController::class);
});
