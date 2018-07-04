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
	public function Setcena($cena)
	{
		$this->cena=$cena;
	}
	public function Setwaga($waga)
	{
		$this->waga=$waga;
	}
	public function Getcena()
	{
		return $this->cena;
	}
	function __destruct()
	{

		echo "wywołanie destruktora";
	}
}