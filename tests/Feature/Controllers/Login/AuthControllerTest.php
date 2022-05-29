<?php

namespace Tests\Feature\Controller\Login;

use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class AuthControllerTest extends TestCase
{
    use RefreshDatabase;


    /** @test */
    public function auth_method_login()
    {
        // $this->withoutExceptionHandling();

        Session::start();
        $user = User::factory()->create();
        $credentials = ['email' => $user->email, 'password' => $user->password , "_token" => csrf_token()];

          $this->post(route('loginLogin'), $credentials)
            ->assertOk();
    }

    /** @test */
    public function auth_method_login_failed()
    {
        Session::start();

        $user = User::factory()->create();
        $credentials = ['email' => $user->email, 'password' => '' , "_token" => csrf_token()];
        $response = $this->post('login', $credentials);
        $response->assertStatus(302);

    }

    /** @test */
    public function login_method_validtion_RequireData()
    {
        Session::start();
        $credentials = [ "_token" => csrf_token()];
        $this->withExceptionHandling();
        $response = $this->post('login' , $credentials);
        $response->assertStatus(302);

    }


}
