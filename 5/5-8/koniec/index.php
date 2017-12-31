<?php

abstract class DatabaseQuery
{
	abstract public function prepareQuery();
	abstract public function sendQuery();
	abstract public function getResult();

	final public function getDataFromDB()
	{
		$this->prepareQuery();
		$this->sendQuery();
		$this->getResult();
	}
}

class MysqlQuery extends DatabaseQuery
{
	public function prepareQuery()
	{
		echo 'Przygotowuje zapytanie dla bazy MySQL<br>';
	}

	public function sendQuery()
	{
		echo 'Wysylam zapytanie dla bazy MySQL<br>';
	}

	public function getResult()
	{
		echo 'Odbieram dane z bazy MySQL<br>';
	}
}

class MongoDBQuery extends DatabaseQuery
{
	public function prepareQuery()
	{
		echo 'Przygotowuje zapytanie dla bazy MongoDB<br>';
	}

	public function sendQuery()
	{
		echo 'Wysylam zapytanie dla bazy MongoDB<br>';
	}

	public function getResult()
	{
		echo 'Odbieram dane z bazy MongoDB<br>';
	}
}

$mysqlQuery = new MysqlQuery();
$mysqlQuery->getDataFromDB();

$mongoDbQuery = new MongoDBQuery();
$mongoDbQuery->getDataFromDB();

?>