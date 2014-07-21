<?php 

class Car {
	public $doors = 4;
	public $wheels = 4;

	public function wheels_doors() {
		return $this->doors + $this->wheels;
	}
}

class CompactCar extends Car {
	var $doors = 2; 

	public function wheels_doors() {
		return $this->doors + $this->wheels + 100;
	}
}

$car1 = new Car();
$car2 = new CompactCar();

echo $car1->wheels . '<br>';
echo $car1->doors . '<br>';
echo $car1->wheels_doors().'<br>';

echo $car2->wheels.'<br>';
echo $car2->doors.'<br>';
echo $car2->wheels_doors().'<br>';
