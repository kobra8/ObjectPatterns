<?php

/**
* Odbiornik
*/
class Engine
{
	public function turnOn()
	{
		echo 'Silnik wlaczony!';
	}

	public function turnOff()
	{
		echo 'Silnik wylaczony!';
	}	
}

/**
* Interfejs Polecenie
*/
interface Command
{
	public function execute();
}

/**
* Klasa wlaczajaca silnik
*/
class TurnOnEngine implements Command
{
	private $engine;

	public function __construct($engine)
	{
		$this->engine = $engine;
	}

	public function execute()
	{
		$this->engine->turnOn();
	}
}

/**
* Klasa wylaczajaca silnik
*/
class TurnOffEngine implements Command
{
	private $engine;

	public function __construct($engine)
	{
		$this->engine = $engine;
	}

	public function execute()
	{
		$this->engine->turnOff();
	}
}

/**
* Klasa przelacznika
*/
class EngineSwitch
{
	public function useSwitch($command)
	{
		$command->execute();
	}
}

/**
* Klient
*/
$engine = new Engine();
$engineSwich = new EngineSwitch();
$turnOn = new TurnOnEngine($engine);
$turnOff = new TurnOffEngine($engine);

$engineSwich->useSwitch($turnOn);
echo '<br>';
$engineSwich->useSwitch($turnOff);

?>