<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;


class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = new User();
        $user->name = 'my name';
        $user->email = 'my email';
        $user->password = 'my password';

        $this->assertTrue($user->save());
    }

    public function testDelete()
    {
        $user = new User();
        $user->name = 'my name';
        $user->email ='my email';
        $user->password = 'my password';
        $user->save();

        $this->assertTrue($user->delete());
    }
}
