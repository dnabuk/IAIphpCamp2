<?php
class ProductVirtual{
	private $ProductVirtualId;
	private $ProductVirtualName;
	private $ProductVirtualCategory;
	private $ProductVirtualDescription;
	private $ProductVirtualPrice;
	private $ProductVirtualQuantity;
	private $ProductVirtualDownloadLink;
	private $ProductVirtualKey;
	private $ProductVirtualFilesize;
	
    public function __construct(){
		$this->ProductVirtualId = 1;
		$this->ProductVirtualName = 'Gwiezne wojny';
		$this->ProductVirtualCategory = 'ebooki';
		$this->ProductVirtualDescription = 'Najnowszy ebook do czytania';
		$this->ProductVirtualPrice = 100;
		$this->ProductVirtualQuantity = 10;
		$this->ProductVirtualDownloadLink = 'GwiezneWojny.pdf';
		$this->ProductVirtualKey = '1234-1234-1234-1234';
		$this->ProductVirtualFilesize = 1234567;	
    }	
	public function __destruct(){
		echo 'Obiekt klasy Product został zniszczony.<br/>';
	}
	public function __set($property, $value){
		if (property_exists($this, $property)){
			$this->$property = $value;
		}
		return $this;
	}	
	public function __get($property){
		if (property_exists($this, $property)){
			return $this->$property;
		}
	}
}