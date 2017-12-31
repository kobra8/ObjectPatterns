<?php

class Pizza
{
	protected $size;

	protected $tomato = false;
	protected $extraCheese = false;
	protected $bacon = false;

	public function __construct($pizzaBuilder) 
	{
		$this->size = $pizzaBuilder->size;
		$this->tomato = $pizzaBuilder->tomato;
		$this->extraCheese = $pizzaBuilder->extraCheese;
		$this->bacon = $pizzaBuilder->bacon;
	}

	public function getName()
	{
		return 'Pizza';
	}
}

/**
* Budowniczy Pizzy
*/
class PizzaBuilder
{
	public $size;

	public $tomato = false;
	public $extraCheese = false;
	public $bacon = false;

	public function __construct($size)
	{
		$this->size = $size;
	}

	public function addTomato()
	{
		$this->tomato = true;
		return $this;
	}

	public function addExtraCheese()
	{
		$this->extraCheese = true;
		return $this;
	}

	public function addBacon()
	{
		$this->bacon = true;
		return $this;
	}

	public function build()
	{
		return new Pizza($this);
	}
}

$pizza = (new PizzaBuilder('Small'))
			->addTomato()
			->addExtraCheese()
			->build();
print_r($pizza);

?>