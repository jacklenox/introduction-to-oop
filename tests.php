<?php
use PHPUnit\Framework\TestCase;

require_once( 'class-car.php' );

class CarTest extends TestCase {
	private $car;

	public function setUp() {
		$this->car = new Car( 'yellow', 4, true );
	}

	public function tearDown() {
	}

	public function testGetCar() {
		$this->assertEquals( $this->car->color, 'yellow' );
		$this->assertEquals( $this->car->doors, 4 );
		$this->assertTrue( $this->car->luggage_rack );
	}
}
