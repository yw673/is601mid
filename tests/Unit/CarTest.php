<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = new Car();
        $car->make = 'my make';
        $car->model = 'my mode';
        $car->year = 'my year';

        $this->assertTrue($car->save());

        $car->delete();
    }

    public function testDelete()
    {
        $car = new Car();
        $car->make = 'my make';
        $car->model = 'my mode';
        $car->year = 'my year';
        $car->save();

        $this->assertTrue($car->delete());
    }
}
