<?php

interface AppComponent
{
	public function __construct(Platform $platform);
	public function getName();
}

/**
* Klasa Video Player
*/
class VideoPlayer implements AppComponent
{
	protected $platform;

	function __construct(Platform $platform)
	{
		$this->platform = $platform;
	}

	public function getName()
	{
		return 'Komponent VideoPlayer' . '-' . $this->platform->getPlatform();
	}
}

/**
* Klasa Card
*/
class Card implements AppComponent
{
	protected $platform;

	function __construct(Platform $platform)
	{
		$this->platform = $platform;
	}

	public function getName()
	{
		return 'Komponent Card' . '-' . $this->platform->getPlatform();
	}
}

/**
* Platforma
*/
interface Platform
{
	public function getPlatform();
}

/**
* Klasa IOS
*/
class IOS implements Platform
{
	public function getPlatform()
	{
		return 'iOS';
	}	
}

/**
* Klasa Android
*/
class Android implements Platform
{
	public function getPlatform()
	{
		return 'Android';
	}	
}

$android = new Android();
$videoPlayer = new VideoPlayer($android);
echo $videoPlayer->getName();
echo '<br>';
$ios = new IOS();
$card = new Card($ios);
echo $card->getName();
?>