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
* Adapter
*/
class ProductAdapter
{
	protected $product;

	public function __construct(Product $product)
	{
		$this->product = $product;
	}

	public function displaySku()
	{
		return $this->product->getSku();
	}

	public function displayPrice()
	{
		return $this->product->getPrice();
	}
}

/**
* Klient
*/
$product = new Product('23421', 199.99);
$productAdapter = new ProductAdapter($product);
echo $productAdapter->displaySku();
echo '<br>';
echo $productAdapter->displayPrice();

?>