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

try {
	echo 'Nazwa: '.$towar->name.' cena: '.$towar->price.' '.$towar->currency;
	echo $towar->sdfdgdfgdfgd;
} catch (exception $e){
	echo $e->getMessage();
}
$towar->currency='zł';
$towar->jakasFunkcja('abc');
echo '<br>';
echo $towar->currency.'<br>';
echo isset($towar->currency);

echo '<br>';
unset($towar->currency);
echo '<br>';
echo isset($towar->currency);