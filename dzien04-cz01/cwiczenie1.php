<?php
	error_reporting(0);
	
	$products = array();
	
	$products[] = array(
		'id' => '1',
		'name' => 'Pluszowy dzięcioł',
		'price' => 29
	);
	
	$products[] = array(
		'id' => '2',
		'name' => 'Pluszowa wiewiórka',
		'price' => 35
	);
	
	$products[] = array(
		'id' => '3',
		'name' => 'Pluszowy kot',
		'price' => 400
	);
	
	$products[] = array(
		'id' => '4',
		'name' => 'Pluszowy ziemniak',
		'price' => 666
	);
	
	$products[] = array(
		'id' => '5',
		'name' => 'Pluszowy burak',
		'price' => 33
	);
	
	$product = $_GET['product'];
	$action = $_GET['action'];
	$name = $_GET['name'];
	$price = $_GET['price'];
	
	$return = null;
	
	if ($action == "checkProduct") {
		foreach ($products as $prod) {
			if ($prod['name'] == $name) {
				$return = $prod;
			}
		}
	}	
	elseif ($action == "addProduct") {
		$productWarning = 0;
		
		if ($product !== null 
		&& $name !== null 
		&& $price !== null) {
			foreach ($products as $prod) {
				if ($prod['id'] == $product) {
					echo "Istnieje już produkt o parametrze id = $product. Podaj inną wartość parametru product.<br>";
					$productWarning = 1;
					break;
				}
			}	
			if ($productWarning !== 1) {
				$products[] = array(
					'id' => $product,
					'name' => $name,
					'price' => $price
				);
			}
		}
		else {
			echo "Uzupełnij brakujące parametry!<br>"; 
			if ($product === null) echo "<li>product</li>";
			if ($name === null) echo "<li>name</li>";
			if ($price === null) echo "<li>price</li>";
		}
		
		$return = $products;
	}
	elseif ($action == "removeProduct") {
		foreach ($products as $index => $prod) {
			if ($prod['id'] == $product) {
				unset($products[$index]);
				$return = $products;
			}
		}
	}
	else {
		echo "Niewłaściwa wartość parametru action. Możliwe wartości: <br>";
		echo "<li>checkProduct</li>";
		echo "<li>addProduct</li>";
		echo "<li>removeProduct</li>";
	}
	
	if ($return !== null) {
		echo '<pre>';
		print_r($return);
		echo '</pre>';
	}
	
	
	/* przykłady:
	http://localhost/iai/03/dzien04-cz01/cwiczenie1.php?action=checkProduct&name=Pluszowa%20wiewi%C3%B3rka
	http://localhost/iai/03/dzien04-cz01/cwiczenie1.php?action=addProduct&name=Pluszowy%20konik&product=6&price=100
	http://localhost/iai/03/dzien04-cz01/cwiczenie1.php?action=removeProduct&product=5

	*/
?>