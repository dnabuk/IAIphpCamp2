<?php
$products=[['id'=>1, 'nazwa'=>'Rower', 'cena'=>1250],['id'=>2, 'nazwa'=>'Longboard', 'cena'=>989],['id'=>3, 'nazwa'=>'Rolki', 'cena'=>199],['id'=>4, 'nazwa'=>'Kask', 'cena'=>340],['id'=>5, 'nazwa'=>'Ochraniacze', 'cena'=>140]];

$path=$_SERVER['PATH_INFO'];
$pathArray = explode('/', $path);
$method = $_SERVER['REQUEST_METHOD'];

switch ($method){
	case 'GET':
		foreach ($products as $row){
			//echo $pathArray[2];
			if ($row['id'] == $pathArray[2])
				echo json_encode($row);
		}
		//zwrotka na podstawie tab $pathArray
		break;
	case 'PUT':
		$params = json_decode(file_get_contents('php://input'),1);
		break;
	case 'POST':
		$params = json_decode(file_get_contents('php://input'),1);
		//aktualizacja danych
		break;
	case 'DELETE':
		//usuwanie
		break;	
	default:
}
//echo json_encode($pathArray);