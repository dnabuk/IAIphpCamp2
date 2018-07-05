<?php
	error_reporting(0);
	
	$products = array();
	
	$products[] = array(
		'id' => '1',
		'name' => 'Krem',
		'price' => 29
	);
	
	$products[] = array(
		'id' => '2',
		'name' => 'Maskotka',
		'price' => 35
	);
	
	$products[] = array(
		'id' => '3',
		'name' => 'Szumis',
		'price' => 400
	);
	
	$products[] = array(
		'id' => '4',
		'name' => 'Hulajnoga',
		'price' => 666
	);
	
	$products[] = array(
		'id' => '5',
		'name' => 'Puzzle',
		'price' => 33
	);
	
	$path = $_SERVER['PATH_INFO'];
	$pathArray = explode('/', $path);
	
	$method = $_SERVER['REQUEST_METHOD'];
	
	//echo $path . '<br>' . $pathArray . '<br>' . $method;
	//print_r($pathArray);
	//die();
	switch ($method) {
		case 'GET':
			if ($pathArray[1] === "productslist") {
				foreach ($products as $prod) {
					$return[] = $prod;
				}
			}
			break;
		case 'PUT': 
			$params = json_decode(file_get_contents('php://input'), 1); //dane przekazane postem:
			break;
		case 'POST':
			$params = json_decode(file_get_contents('php://input'), 1); //dane przekazane postem:
			//zaktualizować dane
			break;
		case 'DELETE':
			//usunąć konkretny zasób
			break;
		default:
	}
	
	echo json_encode($return);
?>