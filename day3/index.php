<?php
require_once('./Product.php');
require_once('./VirtualProduct.php');
require_once('./Base.php');

//echo 'start!<br>';
$pierwszyObiekt = new Product(1,'Kubek', './img/kubeczek.jpg', '50 g', '10x50 cm','-trzyma cieplo' , 12, NULL);
//echo $pierwszyObiekt->getPrice();
echo '<br>';
//$pierwszyObiekt->setProduct(1,'Kubek', './img/kubeczek.jpg', '100 g', '15x55 cm','-trzyma cieplo' , 10, 'PLN');
//var_dump($pierwszyObiekt);
$drugiObiekt = new VirtualProduct();
//$drugiObiekt->setVirtualProduct(2,'Kubek na zimno', './img/kubeczek.jpg', '-trzyma cieplo <br> -fajne toto' , './pdf/attach.pdf', 'A453FB623C', '15 MB', 15, 'PLN');
//var_dump($pierwszyObiekt);
echo '<br>';
//echo $pierwszyObiekt->getBase();
try{
	$pierwszyObiekt->kot=3;
}catch(Exception $e){
	echo 'Znaleziono wyjatek: ',  $e->getMessage(), '<br>';
}
try{
	echo $pierwszyObiekt->id.'<br>';
}catch(Exception $e){
	echo 'Znaleziono wyjatek: ',  $e->getMessage(), '<br>';
}
//$pierwszyObiekt->cotsbcdbh(1,2);
try{
	if(isset($pierwszyObiekt->id)){
		echo 'true<br>';
		unset($pierwszyObiekt->id);
		echo $pierwszyObiekt->id.'<br>';
	}else{
		echo 'false<br>';
	}
}catch(Exception $e){
	echo 'Znaleziono wyjatek: ',  $e->getMessage(), '<br>';
}



//var_dump($pierwszyObiekt);
//var_dump($drugiObiekt);
die('<br>kończe skrypt<br>');