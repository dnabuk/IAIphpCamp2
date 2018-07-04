<?php
class ProductBase{
	protected $ProductId;
	protected $ProductName;
	protected $ProductCategory;
	protected $ProductDescription;
	protected $ProductPrice;
	protected $ProductQuantity;
	
    public function __construct(){
		$this->ProductId = 1;
		$this->ProductName = 'Masło orzechowe';
		$this->ProductCategory = 'nabiał';
		$this->ProductDescription = 'Super pyszne masło na kanapkę';
		$this->ProductPrice = 5.23;
		$this->ProductQuantity = 6;
    }	
	public function __destruct(){
		echo 'Obiekt klasy ProductBase został zniszczony.<br/>';
	}
	public function __set($property, $value){
		if (property_exists($this, $property)){
			$this->$property = $value;
		}
		else{
			throw new Exception('Nie istnieje taki obiekt.');
		}
		return $this;
	}	
	public function __get($property){
		if (property_exists($this, $property)){
			return $this->$property;
		}
		else{
			throw new Exception('Nie istnieje taki obiekt.');
		}
	}		
}