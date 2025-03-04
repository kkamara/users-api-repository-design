<?php

use App\Http\Controllers\API\Auth\LoginController;
use App\Http\Controllers\API\Auth\LogoutController;
use Illuminate\Support\Facades\Route;

Route::prefix("/auth")->group(function () {
    Route::post("/", [LoginController::class, "login"])
        ->name("login")
        ->middleware("guest");
    Route::delete("/", [LogoutController::class, "logout"])
        ->name("logout")
        ->middleware("auth:sanctum");
});