<?php

namespace App\Http\Controllers\API\Auth;

use App\Services\Auth\RegisterUserService;
use Illuminate\Http\Request;

class RegisterController
{
    public function __construct(
        protected RegisterUserService $registerUserService,
    ) {}

    public function register(Request $request) {
        return $this->registerUserService->register($request);
    }
}
