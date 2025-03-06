<?php

namespace Tests\Feature\API;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class UserTest extends TestCase
{
    protected $headers = ['Content-Type' => 'application/json'];

    /**
     * A feature for successful get user response.
     */
    public function test_successful_get_user(): void
    {
        $userEmail = config("testing.user_email");
        $user = User::where("email", $userEmail)
            ->firstOrFail();
        Sanctum::actingAs($user);

        $response = $this->withHeaders($this->headers)
            ->getJson("/api/user");
        $response->assertOk();
        $response->assertJsonStructure([
            "data" => [
                "id",
                "name",
                "email",
                "createdAt",
                "updatedAt",
            ]
        ]);
    }

    /**
     * A feature for unauthorized get user error response.
     */
    public function test_unauthorized_get_user_error(): void
    {
        $response = $this->withHeaders($this->headers)
            ->getJson("/api/user");
        $response->assertUnauthorized();
        $response->assertJsonFragment([
            "message" => "Unauthenticated.",
        ]);
    }
}
