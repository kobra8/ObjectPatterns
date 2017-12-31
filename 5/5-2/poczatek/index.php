<?php

interface Observable
{
	public function addObserver(Subscriber $subscriber);
	public function notifyObservers(Message $message);
}

interface Observer
{
	public function __construct($name);
}

/**
* Klasa Wiadomosci
*/
class Message
{
	protected $content;

	public function __construct($content)
	{
		$this->content = $content;
	}

	public function getContent()
	{
		return $this->content;
	}
}

?>