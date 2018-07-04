<?php
class produkt extends produkt_db{
	private $waga;
	private $wymiar;
	
	/*public function __construct(){
		echo"konstruktor<br/>";
		$this->id=1;
		$this->nazwa="kubek";
		$this->producent="sony";
		$this->cena="20";
		$this->zdjecie="zdjecie";
		$this->opis="kubek termiczny";
		$this->waga="0,2";
		$this->parametry="400ml";
		
		}*/
		
	public function setpar($ide,$naz,$prod,$cen,$op){
		$this->id=$ide;
		$this->nazwa=$naz;
		$this->producent=$prod;
		$this->cena=$cen;
		$this->opis=$op;
		
		
		}
		

		
	public function getprice(){
		return $this->cena;
		}
		
	public function __destruct(){
		echo "<br/>destruktor";
		}
	}
	?>