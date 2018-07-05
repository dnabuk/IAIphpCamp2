<a href="./index1.php?product=1&action=checkProduct">Pokaz produkt o ID 1</a><br/>
<a href="./index1.php?action=addProduct&name=piwo&price=13.00">Dodaj produkt</a><br/>
<a href="./index1.php?product=1&action=removeProduct">Usun produkt o ID</a><br/>
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
	$sql = "SELECT * FROM product WHERE id = '$product' LIMIT 1";
	$result = $conn->query($sql);
	$wynik = $result->fetch_assoc();
	echo json_encode($wynik);
	
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
	echo json_encode($wynik);	
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
			echo 'popranie usunięto rekord o id: '.$product;
			echo json_encode($wynik);
		}
		else
		{
			echo 'blad usuwania';
		}
	}

	
}
else
{
	echo 'Niepoprawna akcja';
}