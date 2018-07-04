<?php
class vir_produkt extends produkt_db{
	private $zalacznik;
	private $klucz;
	private $rozmiarpliku;
	
	
	/*public function __construct(){
		echo"konstruktor vir<br/>";
		$this->id=1;
		$this->nazwa="kubek";
		$this->producent="sony";
		$this->cena="20";
		$this->zdjecie="zdjecie";
		$this->opis="kubek termiczny";
		$this->waga="0,2";
		$this->parametry="400ml";
		
		}*/
		
	public function setpar($ide,$naz,$prod,$cen,$key){
		$this->id=$ide;
		$this->nazwa=$naz;
		$this->producent=$prod;
		$this->cena=$cen;
		$this->klucz=$key;
		
		
		}
		

		
	public function getprice(){
		return $this->cena;
		}
		
	public function __destruct(){
		echo "<br/>destruktor";
		}
	}
?>