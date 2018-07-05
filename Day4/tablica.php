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

	echo json_encode($products);

	?>