<?php

/**
* Mementi
*/
class CalculatorMemento
{
	protected $result;

	public function __construct($result)
	{
		$this->result = $result;
	}

	public function getResult()
	{
		return $this->result;
	}
}

/**
* Kalkulator
*/
class Calculator
{
	protected $result;

	public function sum($a, $b)
	{
		$this->result = $a + $b;
	}

	public function getResult()
	{
		return $this->result;
	}

	public function saveResult()
	{
		return new CalculatorMemento($this->result);
	}

	public function restoreResult(CalculatorMemento $menento)
	{
		$this->result = $menento->getResult();
	}
}

/**
* Klient
*/
$calculator = new Calculator();
$calculator->sum(4, 6);
$savedResult = $calculator->saveResult();

$calculator->sum(2, 3);
echo 'Biezacy wynik: ' . $calculator->getResult() . '<br>';
$calculator->restoreResult($savedResult);
echo 'Poprzedni wynik: ' . $calculator->getResult();

?>