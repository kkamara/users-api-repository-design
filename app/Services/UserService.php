<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserService {
    public function __construct(
        protected UserRepositoryInterface $userRepository,
    ) {}

    public function getUser(User $user) {
        return $this->userRepository->getUser($user);
    }

    public function updateUser(Request $request) {
        return $this->userRepository->updateUser($request);
    }
}