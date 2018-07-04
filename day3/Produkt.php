<?php

class Produkt {
	private $nazwa;
	private $cena;
	private $zdjecie;
	private $kategoria;
	private $kolor;
	private $jakosc;
	private $waga;

	public function __construct() {
		$this->nazwa = "Produkt";
		$this->cena = "0";
		$this->zdjecie = "zdjecie.jpg";
		$this->kategoria = "kategoria";
		$this->kolor = "kolor";
		$this->jakosc = "jakosc";
		$this->waga = "waga";
	}

	public function setNazwa($nazwa) {
		$this->nazwa = $nazwa;            
	}

	public function setCena($cena) {
		$this->cena = $cena;            
	}

	public function setZdjecie($zdjecie) {
		$this->zdjecie = $zdjecie;            
	}

	public function setKategoria($kategoria) {
		$this->kategoria = $kategoria;            
	}

	public function setKolor($kolor) {
		$this->kolor = $kolor;            
	}

	public function setJakosc($jakosc) {
		$this->jakosc = $jakosc;            
	}

	public function setWaga($waga) {
		$this->waga = $waga;            
	}

	////
	public function getNazwa() {
		return $this->nazwa;            
	}

	public function getCena() {
		return $this->cena;            
	}

	public function getZdjecie() {
		return $this->zdjecie;            
	}

	public function getKategoria() {
		return $this->kategoria;            
	}

	public function getKolor() {
		return $this->kolor;            
	}

	public function getJakosc() {
		return $this->jakosc;            
	}

	public function getWaga() {
		return $this->waga;            
	}

	public function __destruct(){
		echo 'koniec';
	}
}
/*

$produkt = new Produkt();
$produkt->setNazwa("dasdas");
echo $produkt->getNazwa();
var_dump($produkt);
die('das');

*/