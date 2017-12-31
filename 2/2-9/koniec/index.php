<?php 

class Pizza
{
	protected $size;
	protected $price;

	public function __construct($size, $price)
	{
		$this->size = $size;
		$this->price = $price;
	}

	public function getSize()
	{
		return $this->size;
	}

	public function setSize($size)
	{
		$this->size = $size;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function setPrice($price)
	{
		$this->price = $price;
	}
}

$pizza = new Pizza(30, 16.99);
print_r($pizza);
$clonedPizza = clone $pizza;
$clonedPizza->setPrice(18.99);
echo '<br>';
print_r($clonedPizza);
?>