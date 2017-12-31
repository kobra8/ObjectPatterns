<?php
/**
* Klasa Product - nie mozemy zmienic
*/
class Product
{
	protected $sku;
	protected $price;

	public function __construct($sku, $price)
	{
		$this->sku = $sku;
		$this->price = $price;
	}

	public function getSku()
	{
		return $this->sku;
	}

	public function getPrice()
	{
		return $this->price;
	}
}

/**
* Klient
*/
$product = new Product('23421', 199.99);
echo $product->displaySku();
echo '<br>';
echo $product->displayPrice();

?>