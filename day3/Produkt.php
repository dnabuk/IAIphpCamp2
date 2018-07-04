<?php

class Produkt {
	public $nazwa;
	public $cena;
	private $zdjecie;
	private $kategoria;
	private $kolor;
	private $jakosc;

	public function __construct(){
		$this->nazwa = "Produkt";
		$this->cena = "0";
		$this->zdjecie = "zdjecie.jpg";
		$this->kategoria = "kategoria";
		$this->kolor = "kolor";
		$this->jakosc = "jakosc";
	}

	public function __destruct(){
		echo 'koniec';
	}
}


$produkt = new Produkt();
die('das');

?>