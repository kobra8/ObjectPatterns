<?php

class Pizza
{
	protected $size;

	protected $tomato = false;
	protected $extraCheese = false;
	protected $bacon = false;

	public function __construct($size, $tomato, $extraCheese, $bacon) 
	{
		$this->size = $size;
		$this->tomato = $tomato;
		$this->extraCheese = $extraCheese;
		$this->bacon = $bacon;
	}

	public function getName()
	{
		return 'Pizza';
	}
}

$pizza = new Pizza('Small', true, false, false);
print_r($pizza);

?>