<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class InsertTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {

        $user= new User();
        $user->name='Venky';
        $user->email='vs489@njit.edu';
        $user->password='asdfgh';
        //$user->save();
        $this->assertTrue($user=!NULL);
    }
}
