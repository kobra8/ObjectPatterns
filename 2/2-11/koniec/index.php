<?php

final class DbConnection
{
	private static $instance;

	private function __construct()
	{

	}

	public static function getInstance()
	{
		if (!self::$instance) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	private function __clone()
	{

	}
}

$db1 = DbConnection::getInstance();
$db2 = DbConnection::getInstance();
print_r($db1 === $db2);

?>