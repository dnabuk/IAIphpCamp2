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
	
	echo '<pre>';
	print_r($products);
	echo '</pre>';
?>