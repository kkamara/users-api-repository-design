<?php

namespace App\Services\Auth;

use App\Repositories\Auth\RegisterUserRepositoryInterface;
use Illuminate\Http\Request;

class RegisterUserService {
    public function __construct(
        protected RegisterUserRepositoryInterface $registerUserRepository,
    ) {}

    public function register(Request $request) {
        return $this->registerUserRepository->register($request);
    }
}