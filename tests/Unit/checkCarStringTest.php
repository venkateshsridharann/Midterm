<?php

namespace Tests\Unit;

use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class checkCarStringTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car=Cars::inRandomOrder()->first();
        $this->assertInternalType('string',$car->Model);
        $this->assertInstanceof('App\Cars',$car);
    }
}
