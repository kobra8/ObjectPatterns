<?php

interface SortStrategy
{
	public function sort($list);
}

class QuickSortStrategy implements SortStrategy
{
	public function sort($list)
	{
		echo 'Lista posortowana za pomoca Quick sort';
		return $list;
	}
}

class BucketSortStrategy implements SortStrategy
{
	public function sort($list)
	{
		echo 'Lista posortowana za pomoca Bucket sort';
		return $list;
	}
}

class InsertionSortStrategy implements SortStrategy
{
	public function sort($list)
	{
		echo 'Lista posortowana za pomoca Insertion sort';
		return $list;
	}
}

class SortingComponent
{
	protected $sortingStrategy;

	public function __construct(SortStrategy $sortingStrategy)
	{
		$this->sortingStrategy = $sortingStrategy;
	}

	public function sortList($list)
	{
		return $this->sortingStrategy->sort($list);
	}
}

$list = [1,2,3,4,5];
$sortingComponent = new SortingComponent(new QuickSortStrategy());
$sortingComponent->sortList($list);

?>