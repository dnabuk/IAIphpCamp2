<?php

require_once('ProductBase.php');
require_once('Product.php');
require_once('VirtualProduct.php');

$object = new Product();

	try {
		$object->a = 1;
	}
	catch (Exception $e) {
		echo $e->getMessage();
		
	}

	try {
		echo $object->a;
		echo $object->rtyu;
	}
	catch (Exception $e) {
		echo $e->getMessage();
		
	}

	try {
		$object->Name();
	}
	catch (Exception $e) {
		echo $e->getMessage();
		
	}

	$object->name;
	isset($object->name);
	unset($object->name);
	

	echo "<br/>";
	$virtual_object = new VirtualProduct();
	
	echo "<br/>";
	var_dump($object);
	echo "<br/>";
	echo "<br/>";
	var_dump($virtual_object);


?>