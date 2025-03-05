<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Http\Resources\UserResource;

class UserRepository implements UserRepositoryInterface {
    public function getUser(Request $request): UserResource {
        return new UserResource($request->user());
    }
}