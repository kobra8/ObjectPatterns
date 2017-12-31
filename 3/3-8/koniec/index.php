<?php

interface Window 
{
	public function renderWindow();
}

/**
* Klasa podstawowego okna
*/
class BasicWindow implements Window
{
	public function renderWindow()
	{
		return 'Zawartosc okna';
	}
}

/**
* Interfejs dekoratora okien
*/
interface WindowDecorator
{
	public function renderWindow();
	public function __construct($window);
}

/**
* Dekorator paska przewijania
*/
class ScrollbarDecorator implements WindowDecorator
{
	protected $window;

	public function renderWindow()
	{
		return $this->window->renderWindow() . '<br>' . $this->renderScrollbar();
	}

	public function renderScrollbar()
	{
		return 'Pasek przewijania';
	}

	public function __construct($window)
	{
		$this->window = $window;
	}
}

/**
* Dekorator paska przewijania
*/
class HeaderDecorator implements WindowDecorator
{
	protected $window;

	public function renderWindow()
	{
		return $this->renderHeader() . '<br>' . $this->window->renderWindow(); 
	}

	public function renderHeader()
	{
		return 'Nagłowek okna';
	}

	public function __construct($window)
	{
		$this->window = $window;
	}
}

$window = new BasicWindow();
$window = new ScrollbarDecorator($window);
$window = new HeaderDecorator($window);
echo $window->renderWindow();

?>