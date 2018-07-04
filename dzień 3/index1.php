<?php
class Product
{
	public $ProductId;
	private $ProductName;
	private $ProductCategory;
	private $ProductDescription;
	private $ProductPrice;
	private $ProductQuantity;
	

}
$product = new Product();
$product->ProductId = 555;

echo $product->ProductId;
echo '<br/>doszedlem do konca';
?>