<?php

interface BrushState
{
	public function paint();
}

class SmallBrushState implements BrushState
{
	public function paint()
	{
		echo 'Linia namalowana malym pedzlem' . '<br>';
	}
}

class MediumBrushState implements BrushState
{
	public function paint()
	{
		echo 'Linia namalowana srednim pedzlem' . '<br>';
	}
}

class BigBrushState implements BrushState
{
	public function paint()
	{
		echo 'Linia namalowana duzym pedzlem' . '<br>';
	}
}

class PaintingCanvas
{
	protected $state;

	public function __construct(BrushState $state)
	{
		$this->state = $state;
	}

	public function setState(BrushState $state)
	{
		$this->state = $state;
	}

	public function paintLine()
	{
		$this->state->paint();
	}
}

/**
* Klient
*/
$canvas = new PaintingCanvas(new SmallBrushState);
$canvas->paintLine();
$canvas->setState(new BigBrushState);
$canvas->paintLine();
$canvas->paintLine();
$canvas->paintLine();
$canvas->paintLine();

?>