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

?>