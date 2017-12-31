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

/**
* Klasa obrazka proxy
*/
class ProxyImage implements Image
{
	private $image;
	private $filename;

	public function __construct($filename)
	{
		$this->filename = $filename;
	}

	public function render()
	{
		if ($this->image == null) {
			$this->image = new RealImage($this->filename);
		}
		return $this->image->render();
	}
}

/**
* klient
*/
$image = new ProxyImage('image2x');
echo $image->render() . '<br>';
echo $image->render() . '<br>';
echo $image->render() . '<br>';

?>