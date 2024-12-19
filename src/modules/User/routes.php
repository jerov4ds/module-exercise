<?php

use Modules\User\Controller\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/disable/{userId}', [UserController::class, 'disable']);
    Route::post('/enable/{userId}', [UserController::class, 'enable']);
});
