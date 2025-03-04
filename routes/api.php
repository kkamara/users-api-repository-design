<?php

use App\Http\Controllers\API\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::prefix("/auth")->group(function () {
    Route::post("/", [LoginController::class, "login"])
        ->name("login")
        ->middleware("guest");
});