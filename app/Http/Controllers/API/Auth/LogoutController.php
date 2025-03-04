<?php

namespace App\Http\Controllers\API\Auth;

use Illuminate\Http\Request;
use App\Services\Auth\LogoutUserService;

class LogoutController
{
    public function __construct(
        protected LogoutUserService $logoutUserService,
    ) {}

    public function logout(Request $request) {
        return $this->logoutUserService->logout($request);
    }
}
