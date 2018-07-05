<?php
$path=$_SERVER['PATH_INFO'];
$pathArray = explode('/', $path);
$method = $_SERVER['REQUEST_METHOD'];

$link = mysqli_connect("localhost", "php2", "jcSxS71poOmxo4pu", "Czwartek");
if ($link->connect_errno){
	echo json_encode('Błąd połączenia z bazą');
	die;
}

switch ($method){
	case 'GET':
		switch($pathArray[1]){
			case 'products':
				$result = $link->query("SELECT * FROM `products`");
				
				$res=array();
				while ($row = $result->fetch_assoc()){
					array_push($res, $row);
					//var_dump($row);
					//echo '<br>';
				}
				
				echo json_encode($res);
				break;
			case 'productsHTM':
				$result = $link->query("SELECT * FROM `products`");
				
				$res=array();
				
				echo '<tr><td>ID</td><td>Nazwa</td><td>Cena</td><td>Operacje</td></tr>';
				while ($row = $result->fetch_assoc()){
					//array_push($res, $row);
					//var_dump($row);
					//echo '<br>';
					echo '<tr>';
					foreach($row as $val)
						echo '<td>'.$val.'</td>';
					
					echo '<td><a href="http://localhost/api.php/DELETE/'.$row['id'].'">USUŃ</a></td></tr>';
				}
				
				break;
			case 'product':
				$stmt = $link->prepare("SELECT * FROM `products` WHERE `id` = ?");
				$stmt->bind_param('i', $pathArray[2]);
				$stmt->execute();

				$result = $stmt->get_result();
				echo json_encode($result->fetch_assoc());
				
				break;
			case 'DELETE':
				$stmt = $link->prepare("DELETE FROM `products` WHERE `id` = ?");
				$stmt->bind_param('i', $pathArray[2]);
				$stmt->execute();
				echo 'Usunięto';
				break;
			case 'productName':
				$stmt = $link->prepare("SELECT * FROM `products` WHERE `nazwa` like ?");
				$stmt->bind_param('s', $pathArray[2]);
				$stmt->execute();

				$result = $stmt->get_result();
				echo json_encode($result->fetch_assoc());
				break;
		}
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