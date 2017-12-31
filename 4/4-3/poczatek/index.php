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

?>