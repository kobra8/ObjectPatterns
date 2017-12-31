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

?>