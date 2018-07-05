<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'phpcamp_pz';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$product = isset($_GET['product']) ? $_GET['product'] : null;
$action = isset($_GET['action']) ? $_GET['action'] : null;
$name = isset($_GET['name']) ? $_GET['name'] : null;
$price = isset($_GET['price']) ? $_GET['price'] : null;


if(isset($product) && ($action == 'checkProduct'))
{
	$sql = "SELECT *, COUNT(id) AS ilosc FROM product WHERE id = '$product' LIMIT 1";
	$result = $conn->query($sql);
	$wynik = $result->fetch_assoc();	
	if($wynik['ilosc'] === '1')
	{
		echo json_encode(array($wynik, 'popranie pokazano rekord o id: '.$product));
	}
	else
	{
		echo json_encode(array('Nie znalezniono rekordu'));
	}
	
}
else if(($action == 'addProduct') && isset($name) && isset($price))
{
	$sql = "INSERT INTO `product` (`id`, `name`, `price`)
	VALUES (NULL, '$name', '$price');";
	$result = $conn->query($sql);
	$id = $conn->insert_id;
	
	$sql = "SELECT * FROM product WHERE id = '$id' LIMIT 1";
	$result = $conn->query($sql);
	$wynik = $result->fetch_assoc();
	echo json_encode(array($wynik, 'Dodano popranie produkt'));	
}
else if($action == 'removeProduct')
{
	$sql = "SELECT *, COUNT(id) AS ilosc FROM product WHERE id = '$product' LIMIT 1";
	$result = $conn->query($sql);
	$wynik = $result->fetch_assoc();
	if($wynik['ilosc'] === '1')
	{
		$sql = "DELETE FROM product WHERE id = '$product' LIMIT 1";
		if ($conn->query($sql) === TRUE)
		{

			echo json_encode(array($wynik, 'popranie usunieto rekord o id: '.$product));
		}
		else
		{
			echo json_encode(array('Blad usuwania!'));
		}
	}
	else
	{
		echo json_encode(array('Nie odnaleziono rekordu o ID!'));
	}
	
}
else
{
	echo json_encode(array('Niepoprawna akcja!'));
}