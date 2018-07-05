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

	$path = $_SERVER['PATH_INFO'];
	$pathArray = explode('/', $path);
	
	
	$method = $_SERVER['REQUEST_METHOD'];
	
	

	//print_r($pathArray);
	//die;

	switch ($method) {
		case 'GET':
			//zwrotka na podstawie tablicy $pathArray
			//$name = $pathArray[2];
			if ($pathArray[1] === "productlist") {

				foreach ($products as $prod) {
			
				$return[] = $prod;
				
			}

			}

			break;
		case 'PUT':
			$params = json_decode(file_get_contents('php://input'), 1); //przekazane dane postem
			break;
		case 'POST':
			$params = json_decode(file_get_contents('php://input'), 1); //przekazane dane postem
			break;
		case 'DELETE':
			//usunąć konkretny zasób na podstawie $pathArray
			break;
		default:
			
			break;
	}

	echo json_encode($return);

	?>