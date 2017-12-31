<?php 

interface Image 
{
	public function render();
}

/**
* Realny obrazek
*/
class RealImage implements Image
{
	private $filename;
	
	public function __construct($filename)
	{
		$this->filename = $filename;
		$this->loadImage();
	}

	public function loadImage()
	{
		echo 'Ladowanie pliku obrazka ' . $this->filename . '<br>';
	}

	public function render()
	{
		echo 'Zawartosc obrazka ' . $this->filename;
	}
}

?>