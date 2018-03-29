<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class UpdateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = User::find(5);
        $user->name='Steve Smith';
        $user->email='steveSmith@user.com';
        $user->save();
        $this->assertTrue(true);
    }
}
