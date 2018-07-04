<?php

class Product
{
	protected $cena;
	protected $id;
	protected $nazwa;
	protected $waga;
	protected $wymiary;
	protected $producent;
	protected $zdjęcie;
	protected $opis;
	protected $kategoria;
	function __construct()
	{
		$this->cena=200;
		$this->id=1;
		$this->nazwa='Kubek';
		$this->waga=10;
	

		echo "construktor";
	}
	function __destruct()
	{

		echo "wywołanie destruktora";
	}
}

$prod = new Product;
var_dump($prod);
echo "bangla";
die();