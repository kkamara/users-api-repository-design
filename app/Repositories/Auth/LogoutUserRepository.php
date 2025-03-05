<?php

namespace App\Repositories\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class LogoutUserRepository implements LogoutUserRepositoryInterface {
    public function logout(Request $request): JsonResponse {
        if (null !== $request->user()->deleted_at) {
            return response()->json([
                "message" => __("response.not_found_error"),
            ], Response::HTTP_NOT_FOUND);
        }
        $request->user()->currentAccessToken()->delete();
        return response()->json(["message" => "Success"]);
    }
}