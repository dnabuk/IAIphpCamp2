<?php
require_once('ProductBase.php');
require_once('ProductVirtual.php');

$product = new ProductVirtual();

try{
	
	$product->ProductName = '123';
	echo $product->ProductName;
	
	$product->ProductNamee = '123';
	echo $product->ProductNameeee;	
		
	
} catch (Exception $e) {
    echo 'Caught exception: <b>',  $e->getMessage(), "</b><br/>";
}
//var_dump($product);
die('doszedlem do konca<br/>');
