<?php

require_once "ProduktBase.php";

class ProduktWirtualny extends ProduktBase{
	protected $kategoria;
	protected $rozmiar;
	protected $rozszerzenie;
	protected $klucz;


	public function __construct() {
		parent::__construct();
		$this->jakosc = "jakosc";
		$this->rozmiar = "rozmiar";
		$this->rozszerzenie = "rozszerzenie";
		$this->klucz = "klucz";
	}

	public function setKategoria($kategoria) {
		$this->kategoria = $kategoria;            
	}

	public function setRozmiar($rozmiar) {
		$this->rozmiar = $rozmiar;            
	}

	public function setRozszerzenie($rozszerzenie) {
		$this->rozszerzenie = $rozszerzenie;            
	}

	public function setKlucz($klucz) {
		$this->klucz = $klucz;            
	}


	////
	

	public function getKategoria() {
		return $this->kategoria;            
	}

	public function getRozmiar() {
		return $this->rozmiar;            
	}

	public function getRozszerzenie() {
		return $this->rozszerzenie;            
	}

	public function getKlucz() {
		return $this->klucz;            
	}


	public function __destruct(){
		echo 'koniec';
	}
}