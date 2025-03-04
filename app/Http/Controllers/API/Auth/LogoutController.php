<?php

namespace App\Http\Controllers\API\Auth;

use Illuminate\Http\Request;

class LogoutController
{
    public function logout(Request $request) {
        $request->user()->currentAccessToken()->delete();
        return ["message" => "Success"];
    }
}
