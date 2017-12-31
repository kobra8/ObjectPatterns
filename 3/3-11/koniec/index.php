<?php

interface Shape
{
	public function __construct($name, $color);
}

/**
* Flyweight (Pylek)
*/
class BasicShape implements Shape
{
	private $name;
	private $color;

	public function __construct($name, $color)
	{
		$this->name = $name;
		$this->color = $color;
	}
}

/**
* Fabryka Pylkow
*/
class BasicShapeFactory
{
	private $instances = [];

	public function getBasicShape($name, $color)
	{
		if (!isset($this->instances[$name])) {
			$this->instances[$name] = new BasicShape($name, $color);
		}
		return $this->instances[$name];
	}

	public function countInstances()
	{
		return count($this->instances);
	}	
}

/**
* klient
*/
$factory = new BasicShapeFactory();
$shape = $factory->getBasicShape('Kwadrat', 'Zielony');
$shape = $factory->getBasicShape('Trojkat', 'Czerwony');
$shape = $factory->getBasicShape('Kwadrat', 'Czerwony');
$shape = $factory->getBasicShape('Okrag', 'Czerwony');
$shape = $factory->getBasicShape('Okrag', 'Czerwony');
$shape = $factory->getBasicShape('Okrag', 'Zielony');
$shape = $factory->getBasicShape('Okrag', 'Bialy');
echo $factory->countInstances();

?>