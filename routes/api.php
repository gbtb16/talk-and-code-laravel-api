<?php

use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\UserContactController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('api')->withoutMiddleware('web')->group(function() {
    Route::get('users', [UserController::class, 'index']);
    Route::post('users', [UserController::class, 'create']);
    Route::get('users/{userId}/contacts', [UserContactController::class, 'index']);
    Route::post('users/{userId}/contacts', [UserContactController::class, 'create']);
    Route::get('contacts', [ContactController::class, 'index']);
});