<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('api')->group(function() {
    Route::get('users', [UserController::class, 'index']);
});