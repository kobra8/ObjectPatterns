<?php

interface Shape
{
	public function __construct($name, $color);
}


/**
* Flyweight
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

?>