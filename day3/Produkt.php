<?php

class Produkt {
	private $nazwa;
	private $cena;
	private $zdjecie;
	private $kategoria;
	private $kolor;
	private $jakosc;

	public function __construct() {
		$this->nazwa = "Produkt";
		$this->cena = "0";
		$this->zdjecie = "zdjecie.jpg";
		$this->kategoria = "kategoria";
		$this->kolor = "kolor";
		$this->jakosc = "jakosc";
	}

	public function setNazwa($nazwa) {
		$this->nazwa = $nazwa;            
	}

	public function setCena($cena) {
		$this->cena = $cena;            
	}

	public function setzdjecie($zdjecie) {
		$this->zdjecie = $zdjecie;            
	}

	public function setkategoria($kategoria) {
		$this->kategoria = $kategoria;            
	}

	public function setkolor($kolor) {
		$this->kolor = $kolor;            
	}

	public function setjakosc($jakosc) {
		$this->jakosc = $jakosc;            
	}

	public function __destruct(){
		echo 'koniec';
	}
}


$produkt = new Produkt();
$produkt->setNazwa("dasdas");
var_dump($produkt);
die('das');