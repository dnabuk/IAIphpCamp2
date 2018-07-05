<?php
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
	/*
	echo '<pre>';
	print_r($products);
	echo '</pre>';
	*/
	$product = $_GET['product'];
	$action = $_GET['action'];
	$name = $_GET['name'];
	$price = $_GET['price'];
	
	switch ($action) {
		case "checkProduct":
			foreach ($products as $prod) {
				foreach ($prod as $key => $val) {
					if ($key == 'name' && $val == $name) {
						echo '<pre>';
						print_r($prod);
						echo '</pre>';
					}
				}
			}
			break;
	}
	
	//http://localhost/iai/03/dzien04-cz01/cwiczenie1.php?action=checkProduct&name=Pluszowa%20wiewi%C3%B3rka
	
?>