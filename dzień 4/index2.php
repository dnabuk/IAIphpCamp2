<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'phpcamp_pz';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$method = $_SERVER['REQUEST_METHOD'];
$request = explode("/", substr(@$_SERVER['PATH_INFO'], 1));
switch ($method) {
	case 'PUT':
		$params = json_decode(file_get_contents('php://input'), 1);
		break;
	case 'POST':
		$params = json_decode(file_get_contents('php://input'), 1);
		print_r($params);
		$name = $params['name'];
		$price = $params['price'];
		
		$sql = "INSERT INTO `product` (`id`, `name`, `price`)
		VALUES (NULL, '$name', '$price');";
		$result = $conn->query($sql);
		$id = $conn->insert_id;
		
		$sql = "SELECT * FROM product WHERE id = '$id' LIMIT 1";
		$result = $conn->query($sql);
		$wynik = $result->fetch_assoc();
		echo json_encode(array($wynik, 'Dodano popranie produkt'));	
		break;
	case 'GET':
		if($request[0] == 'getProduct')
		{
			$product = isset($request[1]) ? $request[1] : null;
			if($product)
			{
				$sql = "SELECT *, COUNT(id) AS ilosc FROM product WHERE id = '$product' LIMIT 1";
			}
			else 
			{
				$sql = "SELECT * FROM product ORDER BY id DESC";
			}
			$result = $conn->query($sql);
			print_r($result);
			while($wynik = $result->fetch_assoc()){
				$json[] = $wynik;
			}
			if(count($json) ==  1)
			{
				echo json_encode(array($json, 'popranie pokazano rekord o id: '.$product));
			}
			else if(count($json) >  1)
			{
				echo json_encode(array($json, 'popranie pobrano rekordy'));
			}			
			else
			{
				echo json_encode(array('Nie znalezniono rekordu'));
			}			
		}
		else
		{
			echo json_encode(array('jakiej szukasz metody w GET?'));
		}
		break;
	case 'DELETE':
		
			break;		
	default:
		//error
		break;
}