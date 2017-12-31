<?php

interface FileSystem
{
	public function getContent();
}

/**
* Klasa Folderu
*/
class Folder implements FileSystem
{
	protected $files = [];

	public function addFile($file)
	{
		$this->files[] = $file;
	}

	public function getContent()
	{
		$content = [];

		foreach ($this->files as $file) {
			$content[] = $file->getContent();
		}
		return $content;
	}	
}

/**
* Klasa Pliku
*/
class File implements FileSystem
{
	public function getContent()
	{
		return 'Zawartosc pliku';
	}	
}

/**
* Klient
*/
$file1 = new File();
$file2 = new File();
$folder1 = new Folder();
$folder2 = new Folder();

$folder2->addFile($file1);

$folder1->addFile($file1);
$folder1->addFile($file2);
$folder1->addFile($folder2);
print_r($folder1->getContent());

?>