<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_bryandeknikker_homepage_returns_successful_response(): void
    {
        $response = $this->get('/', ['HTTP_HOST' => 'bryandeknikker.nl']);
        $response->assertStatus(200);
    }

    public function test_develix_homepage_returns_successful_response(): void
    {
        $response = $this->get('/', ['HTTP_HOST' => 'develix.nl']);
        $response->assertStatus(200);
    }
}
