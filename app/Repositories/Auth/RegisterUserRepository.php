<?php

namespace App\Repositories\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\UserResource;
use App\Models\User;

class RegisterUserRepository implements RegisterUserRepositoryInterface {
    public function register(Request $request): JsonResponse|UserResource {
        $validator = Validator::make($request->all(), [
            "name" => "required|min:3|max:30",
            "email" => "required|email|unique:users",
            "password" => "required|max:30",
        ]);

        if ($validator->fails()) {
            return response()->json([
                "message" => $validator->errors()->first(),
            ], Response::HTTP_BAD_REQUEST);
        }

        $name = htmlspecialchars($request->input("name"));
        $email = filter_var($request->input("email"), FILTER_SANITIZE_EMAIL);
        $password = htmlspecialchars($request->input("password"));

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->save();

        return new UserResource($user);
    }
}