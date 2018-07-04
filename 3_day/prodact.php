<?php
class Product extends Prodact_base
{
	protected $waga;
	protected $wymiary;
	
	function __construct()
	{
		//$this->cena=200;
		//$this->id=1;
		//$this->nazwa='Kubek';
		//$this->waga=10;
	

		echo "construktor";
	}
	public function Setwaga($waga)
	{
		$this->waga=$waga;
	}
	/*
	public function Setcena($cena)
	{
		$this->cena=$cena;
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
	}*/
	function __destruct()
	{

		echo "wywołanie destruktora";
	}
}