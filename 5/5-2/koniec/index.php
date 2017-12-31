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

/**
* Obserwowany - powiwadomienia
*/
class NotificationService implements Observable
{
	protected $subscribers = [];

	public function addObserver(Subscriber $subscriber)
	{
		$this->subscribers[] = $subscriber;
	}

	public function notifyObservers(Message $message)
	{
		foreach ($this->subscribers as $subscriber) {
			$subscriber->onMessagePosted($message);
		}
	}

	public function sendMessage(Message $message)
	{
		$this->notifyObservers($message);
	}
}

/**
* Klasa Obserwatora
*/
class Subscriber implements Observer
{
	protected $name;

	public function __construct($name)
	{
		$this->name  = $name;
	}

	public function onMessagePosted(Message $message)
	{
		echo $this->name . ' - otrzymalem wiadomosc o tresci: ' . $message -> getContent() . '<br>'; 
	}
}

/**
* Klient
*/
$pawel = new Subscriber('Pawel');
$tomek = new Subscriber('Tomek');

$ns = new NotificationService();
$ns->addObserver($pawel);
$ns->addObserver($tomek);

$ns->sendMessage(new Message('Witaj'));

?>