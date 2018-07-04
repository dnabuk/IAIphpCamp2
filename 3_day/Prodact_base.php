<?php

class Prodact_base
{
	protected $cena;
	protected $id;
	protected $nazwa;
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
	public function Setopis($opis)
	{
		$this->opis=$opis;
	}
	public function Setname($name)
	{
		$this->name=$name;
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