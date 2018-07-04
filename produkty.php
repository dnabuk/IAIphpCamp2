<?php
class produkty extends baseclass{
	public $waga;
	public $wymiar;
	
	/*function __construct(){
		return $this->id="1";
		return $this->nazwa="kubek";
		return $this->waga="10";
		return $this->cena="100";
		return $this->opis="opisuje";
	}
	*/
	/*public function setcena($waga, $wymiar){
		
		$this->waga=$waga;
		$this->wymiar=$wymiar;
	}
	public function getcena(){
		return $this->waga;
		return $this->wymiar;
	}
	*/
	
	function __destruct() {
        echo ' destruktor ';
    }
	
}
?>