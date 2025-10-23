<?php

namespace Tests\Feature;

use Tests\TestCase;

class HealthEndpointTest extends TestCase
{
    /** @test */
    public function health_endpoint_returns_ok(): void
    {
        $res = $this->getJson('/health');

        $res->assertOk()
            ->assertJson([
                'status' => 'ok',
            ])
            ->assertJsonStructure(['status', 'timestamp']);
    }
}
