<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;

class LoginController
{
    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            "email" => "required|email",
            "password" => "required",
        ]);

        if ($validator->fails()) {
            return response()->json([
                "message" => $validator->errors()->first(),
            ], Response::HTTP_BAD_REQUEST);
        }

        $email = filter_var($request->input("email"), FILTER_SANITIZE_EMAIL);
        $password = htmlspecialchars($request->input("password"));

        $authentication = Auth::attempt([
            "email" => $email,
            "password" => $password,
        ]);

        if (!$authentication) {
            return response()->json([
                "message" => __("response.login.invalid_credentials"),
            ], Response::HTTP_BAD_REQUEST);
        }

        $user = User::where("email", $email)->first();

        if (null === $user) {
            return response()->json([
                "message" => __("response.internal_server_error"),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        $user->tap(function(User $user) use ($request) {
            $user->token = $user->createToken("token")->plainTextToken;
        });

        return new UserResource($user);
    }
}
