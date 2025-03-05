<?php

namespace App\Repositories;

use App\Http\Resources\UserResource;
use App\Models\User;

class UserRepository implements UserRepositoryInterface {
    public function getUser(User $user): UserResource {
        return new UserResource($user);
    }
}