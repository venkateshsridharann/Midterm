<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Cars;

class deletingCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = Cars::find(7);
        if (!is_null($car))
        {
            $car->destroy(7);
            $car->save();
        }
        $this->assertTrue($carr = !NULL);

    }
}
