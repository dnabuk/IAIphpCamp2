<?php

class Vproduct extends Prodact_base
{
	
	
	protected $załącznik;
	protected $klucz;
	protected $rozmiar_pliku;
	
	function __construct()
	{
		//$this->cena=200;
		//$this->id=2;
		//$this->nazwa='ebook';
		//$this->opis='Ciekawa książka';
	

		//echo "construktor";
	}
	/*public function Setcena($cena)
	{
		$this->cena=$cena;
	}
	
	public function Setopis($opis)
	{
		$this->opis=$opis;
	}
	public function Setname($nazwa)
	{
		$this->nazwa=$nazwa;
	}
	public function Getcena()
	{
		return $this->cena;
	}*/
	public function Setklucz($klucz)
	{
		$this->klucz=$klucz;
	}
	function __destruct()
	{

		echo "wywołanie destruktora";
	}
}