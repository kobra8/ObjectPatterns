<?php
/**
* klasa Vehicle
*/
class Vehicle
{
	protected $name;

	public function getName()
	{
		return $this->name;
	}		
}

/**
* Klasa Car
*/
class Car extends Vehicle
{
	
	function __construct($name)
	{
		$this->name = $name;
	}
}

/**
* Fabryka samochodow
*/
class CarFactory
{

	public static function createCar($name)
	{
		return new Car($name);
	}
	
}

$car = CarFactory::createCar('Ford');
echo $car->getName();

?>