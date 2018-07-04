<?php
include_once('productBase.php');
include_once('product.php');
include_once('virtual.php');


$towar = new Product();
try {
	$towar->name='rowerek';
	$towar->price='123';
	$towar->currency='zł';
	$towar->a='asdfasd';
} catch (exception $e){
	echo $e->getMessage();
}
echo 'Nazwa: '.$towar->getName().' cena: '.$towar->getPrice();
echo '<br />';
