<?php 

/**
* Procesor platnosci
*/
abstract class PaymentProcessor
{
	protected $successor = null;

	public function setSuccesor($paymentProcessor)
	{
		$this->successor = $paymentProcessor;
	}

	abstract public function processPayment($amount);	
}

/**
* PayPal
*/
class PayPal extends PaymentProcessor
{
	public function	processPayment($amount)
	{
		if ($amount >= 0 && $amount <= 99) {
			return 'Platnosci PayPal: ' . $amount;
		}
		else {
			if ($this->successor != null) {
				return $this->successor->processPayment($amount);
			}
		}
	}
}

/**
* Przelew
*/
class BankTransfer extends PaymentProcessor
{
	public function	processPayment($amount)
	{
		if ($amount >= 100 && $amount <= 999) {
			return 'Platnosc Przelew: ' . $amount;
		}
		else {
			if ($this->successor != null) {
				return $this->successor->processPayment($amount);
			}
		}
	}
}

/**
* Karta
*/
class CreditCard extends PaymentProcessor
{
	public function	processPayment($amount)
	{
		if ($amount >= 1000) {
			return 'Platnosc Karta: ' . $amount;
		}
		else {
			if ($this->successor != null) {
				return $this->successor->processPayment($amount);
			}
		}
	}
}

/**
* Klient
*/
$pp = new PayPal();
$bt = new BankTransfer();
$cc = new CreditCard();

$pp->setSuccesor($bt);
$bt->setSuccesor($cc);

echo $pp->processPayment(4500);

?>