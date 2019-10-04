<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BasicRouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHomePage()
    {
        $response = $this->get('/');
        $response->assertSee(config('app.name'));
        $response->assertStatus(200);
    }

    public function testLoginPage()
    {
        $response = $this->get('/login');
        $response->assertSee(config('app.name'));
        $response->assertSee("Forgot Your Password?");
        $response->assertStatus(200);
    }

    public function testRegisterPage()
    {
        $response = $this->get('/register');
        $response->assertSee(config('app.name'));
        $response->assertSee("Name");
        $response->assertSee("Confirm Password");
        $response->assertStatus(200);
    }
}
