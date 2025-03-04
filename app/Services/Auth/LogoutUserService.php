<?php

namespace App\Services\Auth;

use App\Repositories\Auth\LogoutUserRepositoryInterface;
use Illuminate\Http\Request;

class LogoutUserService {
    public function __construct(
        protected LogoutUserRepositoryInterface $logoutUserRepository,
    ) {}

    public function logout(Request $request) {
        return $this->logoutUserRepository->logout($request);
    }
}