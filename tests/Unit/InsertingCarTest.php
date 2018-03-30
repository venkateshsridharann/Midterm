<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Cars;
class InsertingCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user=new Cars();
        $user->make='honda';
        $user->model='X60';
        $user->year='2018';
        //$user->save();
        $this->assertTrue($user=!NULL);
    }

}
