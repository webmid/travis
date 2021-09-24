<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get(route('api.user.list'));

        $response->assertStatus(200);
    }
    public function test_example_user()
    {
        $response = $this->get(route('api.user.list'));

        $response->assertStatus(200)->assertJson([
            'success' => true
        ]);
    }
}
