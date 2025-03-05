<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\UserResource;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController
{
    public function __construct(
        protected UserService $userService,
    ) {}

    public function getUser(Request $request) {
        return $this->userService->getUser($request->user());
    }

    public function updateUser(Request $request) {
        return $this->userService->updateUser($request);
    }
}
