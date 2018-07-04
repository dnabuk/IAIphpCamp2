<?php
class ProductVirtual extends ProductBase{
	private $ProductDownloadLink;
	private $ProductKey;
	private $ProductFilesize;
	private $ProductOcena;
	
    public function __construct(){
		$this->ProductId = 2;
		$this->ProductName = 'Ebook fajny';
		$this->ProductCategory = 'ebook';
		$this->ProductDescription = 'Eook na wieczór.';
		$this->ProductPrice = 12.99;
		$this->ProductQuantity = 123;
		$this->ProductDownloadLink = 'GwiezneWojny.pdf';
		$this->ProductKey = '1234-1234-1234-1234';
		$this->ProductFilesize = 1234567;	
		$this->ProductOcena = 'fajny';
    }	
	public function __destruct(){
		echo 'Obiekt klasy Product został zniszczony.<br/>';
	}
	public function __set($property, $value){
		if (property_exists($this, $property)){
			$this->$property = $value;
		}
		else{
			throw new Exception('Nie istnieje taka zmienna.');
		}
		return $this;
	}	
	public function __get($property){
		if (property_exists($this, $property)){
			return $this->$property;
		}
		else{
			throw new Exception('Nie istnieje taka zmienna.');
		}
	}
}