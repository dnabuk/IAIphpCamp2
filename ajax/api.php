<?php
	
	error_reporting(0);

	$products = array();

	$products[] = array(
		'id' => '1',
		'name' => 'Kubek',
		'price' => '50',
	);

	$products[] = array(
		'id' => '2',
		'name' => 'Miś',
		'price' => 30,
	);

	$products[] = array(
		'id' => '3',
		'name' => 'Parasolka',
		'price' => 25,
	);

	$products[] = array(
		'id' => '4',
		'name' => 'Figurka',
		'price' => 5,
	);

	$products[] = array(
		'id' => '5',
		'name' => 'Samochodzik',
		'price' => 50,
	);


	$product = $_GET['product'];
	$action = $_GET['action'];
	$name = $_GET['name'];
	$price = $_GET['price'];


	if ($action === 'checkProduct') {
		foreach ($products as $prod) {
			if ($prod['name'] == $name) {
				echo '<pre>';
				print_r($prod);
				echo '</pre>';
				break;
			}
		}
		
	}
	elseif ($action === 'addProduct') {
		
		$products[] = array(
		'id' => $product,
		'name' => $name,
		'price' => $price ,
	);

		echo '<pre>';
		print_r($products);
		echo '</pre>';
		echo "Produkt dodany pomyślnie!";

	}
	elseif ($action === 'removeProduct') {
		foreach ($products as $index => $prod) {
			if ($prod['id'] == $product) {
				unset($products[$index]);
				echo '<pre>';
				print_r($products);
				echo '</pre>';
				echo "Produkt usunięty pomyślnie!";
			}
			
		}
		
	}

	

	/*echo '<pre>';
	print_r($products);
	echo '</pre>';*/

?>