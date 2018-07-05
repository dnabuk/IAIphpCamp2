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
		if($request[0] == 'addProduct')
		{
			$params = json_decode(file_get_contents('php://input'), 1);
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
		}
		else
		{
			echo json_encode(array('jakiej szukasz metody w POST?'));
		}
		break;
	case 'GET':
		if($request[0] == 'getProducts')
		{
			$sql = "SELECT id, name, price FROM product ORDER BY id DESC";
			$result = $conn->query($sql);
			
			while($row = $result->fetch_assoc())
			{
				echo '<tr width="100%">';
				foreach($row as $key => $value)
				{
					echo '<td>';
					echo $value;
					echo '</td>';
				}
				echo '<td><button type="button" name="btnUsun" id="'.$row['id'].'">Usun rekord</button></td>';
				echo '</tr>';
			}
			
		}
		else if($request[0] == 'getProduct')
		{
			$product = $request[1];

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
		else
		{
			echo 'jakiej szukasz metody w GET?';
		}
		break;
	case 'DELETE':
		if($request[0] == 'removeProduct')
		{
			$product = $request[1];
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
			break;		
	default:
		//error
		break;
}