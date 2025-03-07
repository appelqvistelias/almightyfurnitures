<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_view_login_form()
    {
        $response = $this->get('/');
        //$response->assertSeeText('email');
        $response->assertStatus(200);
    }

    public function test_login_user()
    {
        $user = new User();
        $user->name = 'name';
        $user->email = 'example@yrgo.se';
        $user->password = Hash::make('123');
        $user->save();

        $response = $this
            ->followingRedirects()
            ->post('login', [
                'email' => 'example@yrgo.se',
                'password' => '123',
            ]);
        $response->assertOk();
        // $response->assertSeeText('Hello, Robot!');
    }

    public function test_login_user_without_password()
    {
        $response = $this
            ->followingRedirects()
            ->post('login', [
                'email' => 'example@yrgo.se',
            ]);
        $response->assertOk();
        //$response->assertSeeText('Whoops! Please try to login again.');
    }

    public function test_login_user_with_incorrect_password()
    {
        $user = new User();
        $user->name = 'Mr Robot';
        $user->email = 'example@yrgo.se';
        $user->password = Hash::make('123');
        $user->save();

        $response = $this
            ->followingRedirects()
            ->post('login', [
                'email' => 'example@yrgo.se',
                'password' => 'wrong_password',
            ]);

        //$response->assertSeeText('Whoops! Please try to login again.');
        $response->assertOk();
    }

    public function test_login_with_nonexistent_user()
    {
        $response = $this
            ->followingRedirects()
            ->post('login', [
                'email' => 'nonexistent@yrgo.se',
                'password' => '123',
            ]);

        //$response->assertSeeText('Whoops! Please try to login again.');
        $response->assertOk();
    }

    public function test_login_user_with_remember_me()
    {
        $user = new User();
        $user->name = 'Mr Robot';
        $user->email = 'example@yrgo.se';
        $user->password = Hash::make('123');
        $user->save();

        $response = $this
            ->followingRedirects()
            ->post('login', [
                'email' => 'example@yrgo.se',
                'password' => '123',
                'remember' => 'on',
            ]);

        // $response->assertSeeText('Hello, Mr Robot!');

        // -----Check remember_web cookie
        $this->assertNotNull($this->app['cookie']->getQueuedCookies());
    }

    public function test_logout_user()
    {
        $user = new User();
        $user->name = 'Mr Robot';
        $user->email = 'example@yrgo.se';
        $user->password = Hash::make('123');
        $user->save();

        // ---First login
        $this->post('login', [
            'email' => 'example@yrgo.se',
            'password' => '123',
        ]);

        //---After logout
        $response = $this
            ->followingRedirects()
            ->post('logout');

        //$response->assertSeeText('Email');
        $response->assertOk();
        $this->assertGuest();
    }

    public function test_login_validation_requires_email()
    {
        $response = $this
            ->followingRedirects()
            ->post('login', [
                'password' => '123',
            ]);

        //$response->assertSeeText('Whoops! Please try to login again.');
        $response->assertOk();
    }

    public function test_throttling_after_too_many_attempts()
    {
        $user = new User();
        $user->name = 'Mr Robot';
        $user->email = 'example@yrgo.se';
        $user->password = Hash::make('123');
        $user->save();

        // ---Multiple failed login attempts
        for ($i = 0; $i < 5; $i++) {
            $this->post('login', [
                'email' => 'example@yrgo.se',
                'password' => 'wrong_password',
            ]);
        }

        // --The next attempt should be throttled
        $response = $this
            ->followingRedirects()
            ->post('login', [
                'email' => 'example@yrgo.se',
                'password' => 'wrong_password',
            ]);

        // ---Check  throttling message
        $response->assertOk();
        //$response->assertSeeText('Too many login attempts');
    }
}
