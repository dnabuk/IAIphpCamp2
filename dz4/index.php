<?php

$products =
[
	["id" => 1, "nazwa" => "kubek", "cena" => 5],
	["id" => 2, "nazwa" => "szklanka", "cena" => 2],
	["id" => 3, "nazwa" => "butelka", "cena" => 3],
	["id" => 4, "nazwa" => "czajnik", "cena" => 7],
	["id" => 5, "nazwa" => "filizanka", "cena" => 4]
];
//http://localhost/phpCamp2018/dz4/index.php/producs/kubek - wywołanie
$path = $_SERVER['PATH_INFO'];
$pathArray = explode('/', $path);
print_r($pathArray);
die();

$method = $_SERVER['REQUEST_METHOD'];

switch ($method)
{
	case 'GET': //pobieranie
		curl_setopt($path, CURLOPT_RETURNTRANSFER, true);
		break;
	case 'PUT':	//dodawanie
		$params = json_decode(file_get_contents('php://'), 1); //dane przekazane postem
		$data = json_encode($products);
		$ch = curl_init('http://localhost/phpCamp2018/dz4/index.php/producs/kubek');
		break;
	case 'POST': //aktualizowanie/edycja
		$params = json_decode(file_get_contents('php://'), 1); //dane przekazane postem
		break;
	case 'DELETE': //usuwanie zasobu na podstawie $pathArray
		$ch = curl_init('//http://localhost/phpCamp2018/dz4/index.php/producs/kubek');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		break;
	default:
	
}

echo json_encode($products);
//wywoływac 1 program w 4 różnych trybach, któe robią 4 różne operacje
?>