<?php
class ProductVirtual extends ProductBase{
	private $ProductDownloadLink;
	private $ProductKey;
	private $ProductFilesize;
	
    public function __construct(){
		$this->ProductDownloadLink = 'GwiezneWojny.pdf';
		$this->ProductKey = '1234-1234-1234-1234';
		$this->ProductFilesize = 1234567;	
    }	
	public function __destruct(){
		echo 'Obiekt klasy Product został zniszczony.<br/>';
	}
	public function __setV($property, $value){
		if (property_exists($this, $property)){
			$this->$property = $value;
		}
		return $this;
	}	
	public function __getV($property){
		if (property_exists($this, $property)){
			return $this->$property;
		}
	}
}