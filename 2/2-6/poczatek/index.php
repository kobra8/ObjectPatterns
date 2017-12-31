<?php

/**
* Klasa Button
*/
abstract class Button 
{
	abstract function getName();
}

/**
* Klasa Windows Button 
*/
class WindowsButton extends Button
{
	function getName()
	{
		return 'Przycisk Windows';
	}
}

/**
* Klasa Linux Button 
*/
class LinuxButton extends Button
{
	function getName()
	{
		return 'Przycisk Linux';
	}
}

/**
* Klasa Menu
*/
abstract class Menu 
{
	abstract function getName();
}

/**
* Klasa Windows Menu
*/
class WindowsMenu extends Menu
{
	function getName()
	{
		return 'Menu Windows';
	}
}

/**
* Klasa Linux Menu
*/
class LinuxMenu extends Menu
{
	function getName()
	{
		return 'Menu Linux';
	}
}

?>