<?php

/**
* Iterator
*/
class MenuItemsIterator implements Iterator
{
	private $menuItems;
	private $index = 0;

	public function __construct(MenuItemsCollection $menuItems)
	{
		$this->menuItems = $menuItems;
	}

	public function current()
	{
		return $this->menuItems->getItem($this->index);
	}

	public function key()
	{
		return $this->index;
	}

	public function next()
	{
		$this->index++;
	}

	public function rewind()
	{
		$this->index = 0;
	}

	public function valid()
	{
		return !is_null($this->menuItems->getItem($this->index));
	}
}

/**
* Kolekcja
*/
class MenuItemsCollection implements IteratorAggregate
{
	private $items = array();

	public function getIterator()
	{
		return new MenuItemsIterator($this);
	}

	public function addItem($item)
	{
		$this->items[] = $item;
	}

	public function getItem($key)
	{
		if (isset($this->items[$key])) {
			return $this->items[$key];
		}
		return null;
	}
}

$menuItems = new MenuItemsCollection();
$menuItems->addItem('Start');
$menuItems->addItem('Wiadomosci');
$menuItems->addItem('Osoby');

foreach ($menuItems as $menuItem) {
	echo $menuItem . '<br>';
}

?>