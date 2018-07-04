<?php
require_once('ProductBase.php');
require_once('ProductVirtual.php');

$product = new ProductVirtual();

try{
	
	$product->ProductName = '123';
	echo $product->ProductName.'<br/>';
	
	//$product->ProductNamee = '123';
	//echo $product->ProductNameeee;	
	
	$test = $product->ProductId('NewProductId');
	echo $test;
	
} catch (Exception $e) {
    echo 'Caught exception: <b>',  $e->getMessage(), "</b><br/>";
}
//var_dump($product);
die('<br/>doszedlem do konca<br/>');
