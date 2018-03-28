<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
use PHPUnit\Framework\Constraint\IsType;


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

    public function testCarCount()
    {
        $car = Car::All();
        $carCount = $car->count();

        $this->assertEquals($carCount,50);

    }

    public function testUpdate()
    {
        $car = Car::inRandomOrder()->first();
        $car->year = '2000';

        $this->assertTrue($car->save());

    }

    public function testInt()
    {
        $car = Car::inRandomOrder()->first();
        $year = (int)$car->year;
        $this->assertInternalType("int", $year);
    }

    public function testMake()
    {
        $car = Car::inRandomOrder()->first();
        $make = $car->make;
        $this->assertContains($make,$array = array ('ford','toyota','honda'));
    }
}
