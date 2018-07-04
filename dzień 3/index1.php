<?php
class Product
{
	private $ProductId;
	private $ProductName;
	private $ProductCategory;
	private $ProductDescription;
	private $ProductPrice;
	private $ProductQuantity;
	
    public function __construct()
	{
		$this->ProductId = 1;
		$this->ProductName = 'Masło orzechowe';
		$this->ProductCategory = 'nabiał';
		$this->ProductDescription = 'Super pyszne masło na kanapkę';
		$this->ProductPrice = 5.23;
		$this->ProductQuantity = 6;
		
        echo 'Obiekt klasy Product został stworzony.<br/>';
    }	
	public function __destruct()
	{
		echo 'Obiekt klasy Product został zniszczony.<br/>';
	}
}
$product = new Product();

die('<br/>doszedlem do konca<br/>');
?>