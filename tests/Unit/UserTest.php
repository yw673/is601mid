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
        $user =  User::inRandomOrder()->first();


        $this->assertTrue($user->delete());
    }

    public function testUserCount()
    {
        $user = User::All();
        $userCount = $user->count();

        $this->assertEquals($userCount,50);

    }

    public function testUpdate()
    {
        $user = User::inRandomOrder()->first();
        $user->name = 'Steve Smith';

        $this->assertTrue($user->save());

    }
}
