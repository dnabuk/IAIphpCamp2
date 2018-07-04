<?php
	require_once('plik1Product.php');
	require_once('plik1VirtualProduct.php');
	
	$obiekt1 = new Product;
	$obiekt2 = new VirtualProduct;
	
	$obiekt1->price = 10;
	unset($obiekt1->price);
	//$obiekt1->asdasd();
	
	if(isset($obiekt1->price))
	{
		echo $obiekt1->price;
	}
	else
	{
		echo "Brak wartości";
	}
	
	try
	{
		//$obiekt1->__call(zniszcz(),;
	}
	catch (Exception $e)
	{
		echo "Caught exception: ".$e;
	}
	//$obiekt1->SetValues(1, "Kubek", 10, "kubek.jpg", 50, 20, 0.5);
	//var_dump($obiekt1);
	echo "Koniec<br>";
	die();
?>