<?php

namespace Tests\Unit;

use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarModelTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = Cars::inRandomOrder()->first();
        $make=$car->Make;
        $this->assertContains($make,['Honda','Toyota','Ford']);
        $this->assertTrue(true);
    }
}
