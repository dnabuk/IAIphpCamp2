<?php
class Product{
	private $ProductId;
	private $ProductName;
	private $ProductCategory;
	private $ProductDescription;
	private $ProductPrice;
	private $ProductQuantity;
	private $ProductWeight;
	
    public function __construct(){
		$this->ProductId = 1;
		$this->ProductName = 'Masło orzechowe';
		$this->ProductCategory = 'nabiał';
		$this->ProductDescription = 'Super pyszne masło na kanapkę';
		$this->ProductPrice = 5.23;
		$this->ProductQuantity = 6;
		$this->ProductWeight = 123;
    }	
	public function __destruct(){
		echo 'Obiekt klasy Product został zniszczony.<br/>';
	}
	public function setProductName($name){
		$this->ProductName = $name;
	}	
	public function getProductName(){
		return $this->ProductName;
	}		
}