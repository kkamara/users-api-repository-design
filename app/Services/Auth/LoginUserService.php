<?php

namespace App\Services\Auth;

use App\Repositories\Auth\LoginUserRepositoryInterface;
use Illuminate\Http\Request;

class LoginUserService {
    public function __construct(
        protected LoginUserRepositoryInterface $loginUserRepository,
    ) {}

    public function login(Request $request) {
        return $this->loginUserRepository->login($request);
    }
}