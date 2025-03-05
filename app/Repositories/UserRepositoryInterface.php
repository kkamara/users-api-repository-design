<?php

namespace App\Repositories;

use App\Http\Resources\UserResource;
use App\Models\User;

interface UserRepositoryInterface {
    public function getUser(User $user): UserResource;
}