<?php

class baseclass{
	protected $id;
	protected $nazwa;
	public $cena;
	protected $waluta;
	public $opis;
	protected $zdjecie;
	
	public function setcena($id, $nazwa, $cena, $waluta, $opis, $zdjecie){
		$this->id=$id;
		$this->nazwa=$nazwa;
		$this->cena=$cena;
		$this->waluta=$waluta;	
		$this->opis=$opis;
		$this->zdjecie=$zdjecie;
		
	}
/*	public function getcena(){
	//return $this->id;
	//return $this->nazwa;
	return $this->cena;
	//return $this->waluta;
	//return $this->opis;
	//return $this->zdjecie;
}
*/
	public function __set($nazwa, $value){
		if(property_exists($this, $nazwa)){
			$this->nazwa=$value;
			echo "ustawiam $nazwa o wartosci $value";
		} else{
			throw new Exception('kubek');
		} 
	}
	
	
	public function __get($nazwa){
	echo 'getttt';
		return 'superget '. $this->$nazwa;
	}
	
	 public function __call($nazwa, $array){
        echo "<br />Wywolanie metody $nazwa.";
    }
	
	function __isset($opis) {
        $this->opis;
		return $opis;
        echo 'isset';
    }

}
?>












