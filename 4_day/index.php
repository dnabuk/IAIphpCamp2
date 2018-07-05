<?php


$path=$_server['PATH_INFO'];
$pathArray=explode('/', $path);
$method=$_SERVER['REQUEST_METHOD'];
var_dump($pathArray);
switch ($method) {
	case 'GET':
		
		break;
	case 'PUT':
		$params=json_decode(file_get_contents('php://input'),1);
		break;
	case 'POST':
		$params=json_decode(file_get_contents('php://input'),1);
		break;
	case 'DELETE':
		# code...
		break;
}
//echo json_encode($products);
?>