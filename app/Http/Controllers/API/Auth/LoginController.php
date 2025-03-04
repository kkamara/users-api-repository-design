<?php

namespace App\Http\Controllers\API\Auth;

use App\Services\Auth\LoginUserService;
use Illuminate\Http\Request;

class LoginController
{
    public function __construct(
        protected LoginUserService $loginUserService
    ) {}

    public function login(Request $request) {
        return $this->loginUserService->login($request);
    }
}
