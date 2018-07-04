<?php

class ProduktBase {
	protected $nazwa;
	protected $cena;


	public function __construct() {
		$this->nazwa = "ProduktBASE";
		$this->cena = "0";
	}

	public function setNazwa($nazwa) {
		$this->nazwa = $nazwa;            
	}

	public function setCena($cena) {
		$this->cena = $cena;            
	}


	////
	public function getNazwa() {
		return $this->nazwa;            
	}

	public function getCena() {
		return $this->cena;            
	}
}