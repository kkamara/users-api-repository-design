<?php

namespace App\Services;

use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserService {
    public function __construct(
        protected UserRepositoryInterface $userRepository,
    ) {}

    public function getUser(Request $request) {
        return $this->userRepository->getUser($request);
    }
}