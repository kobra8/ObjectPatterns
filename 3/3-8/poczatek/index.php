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

?>