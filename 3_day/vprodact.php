<?php
class Vproduct
{
	protected $cena;
	protected $id;
	protected $nazwa;
	//protected $waga;
	//protected $wymiary;
	protected $producent;
	protected $zdjęcie;
	protected $opis;
	protected $kategoria;
	function __construct()
	{
		$this->cena=200;
		$this->id=2;
		$this->nazwa='ebook';
		$this->opis='Ciekawa książka';
	

		echo "construktor";
	}
	public function Setcena($cena)
	{
		$this->cena=$cena;
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