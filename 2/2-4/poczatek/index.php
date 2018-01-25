<?php

interface Vehicle
{
	public function getName();
}

/**
* Klasa Car
*/
class Car implements Vehicle
{
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}
}

/**
* Klasa Bicycle
*/
class Bicycle implements Vehicle
{
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}
}

// Interfejs fabryki

interface VehicleFactory {
	public function create($name);
}

// Fabryka samochodów

class CarFactory implements VehicleFactory {
	public function create($name) {
		return new Car($name);
	}
}

// Fabryka rowerów

class BicycleFactory implements VehicleFactory {
	public function create($name) {
		return new Bicycle($name);
	}
}

$carFactory = new CarFactory();
$bikeFactory = new BicycleFactory();

$car = $carFactory->create('Trabant');
echo $car->getName();

$bike = $bikeFactory-> create('Romet');
echo "<br>";
echo $bike->getName();

?>