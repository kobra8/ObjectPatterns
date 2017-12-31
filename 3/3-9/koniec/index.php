<?php 

class Product
{
	public function getProduct()
	{
		return 'Produkt';
	}
}

class Payment
{
	public function makePayment()
	{
		return true;
	}
}

class Customer
{
	public function getCustomerData()
	{
		return 'Dane zamawiajacego';
	}
}

/**
* Fasada zamowienia
*/
class OrderFacade
{
	protected $product;
	protected $payment;
	protected $customer;
	
	public function __construct()
	{
		$this->product = new Product();
		$this->payment = new Payment();
		$this->customer = new Customer();
	}

	public function prepareOrder()
	{
		$this->product->getProduct();
		$this->payment->makePayment();
		$this->customer->getCustomerData();
		return 'Zamowienie przygotowane';
	}
}

/**
 klient
*/
$order = new OrderFacade();
echo $order->prepareOrder();

?>