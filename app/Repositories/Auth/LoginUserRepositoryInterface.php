<?php

namespace App\Repositories\Auth;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

interface LoginUserRepositoryInterface {
    public function login(Request $request): Response|UserResource;
}