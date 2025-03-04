<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class UserController
{
    public function getUser(Request $request) {
        return new UserResource($request->user());
    }
}
