<?php	
	require_once 'ProductBase.php';
	require_once 'Product.php';
	require_once 'VirtualProduct.php';
			
	$firstObject = new Product();
	var_dump($firstObject);
	
	$secondObject = new VirtualProduct();
	var_dump($secondObject);
	
	try {
		$firstObject->a = 1;
	}
	catch (Exception $e) {
		echo 'Uwaga: ' . $e->getMessage() . '<br>';
	}
	
	try {
		echo $firstObject->__get("abc");
	}
	catch (Exception $e) {
		echo 'Uwaga: ' . $e->getMessage() . '<br>';
	}
		
	$firstObject->gsffg(); 
	isset($firstObject->name) . '<br>';
	isset($firstObject->gfgfgfs) . '<br>';
	
	unset($firstObject);
	echo "Po unset(firstObject)";
	
	die("Kończę skrypt");
?>