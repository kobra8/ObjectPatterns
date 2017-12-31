<?php

interface ChatMediator
{
	public function sendMessage($user, $message);
}

/**
* Klasa mediatora
*/
class ChatMediatorClass implements ChatMediator
{
	public function sendMessage($user, $message)
	{
		$sender = $user->getName();
		echo 'Nadawca: ' . $sender . ' Wiadomość: ' . $message;
	}	
}

/**
* Klasa Uzytkownika
*/
class User
{
	private $name;
	private $chatMediator;

	public function __construct($name, $chatMediator)
	{
		$this->name = $name;
		$this->chatMediator = $chatMediator;
	}

	public function getName()
	{
		return $this->name;
	}

	public function send($message)
	{
		$this->chatMediator->sendMessage($this, $message);
	}
}

/**
* Klient
*/
$mediator = new ChatMediatorClass();
$pawel = new User('Pawel', $mediator);
$tomek = new User('Tomek', $mediator);

$pawel->send('Czesc Tomek');
echo '<br>';
$tomek->send('Czesc Pawel');

?>