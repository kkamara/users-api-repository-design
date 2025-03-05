<?php

namespace App\Repositories;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

interface UserRepositoryInterface {
    public function getUser(Request $request): UserResource;
}