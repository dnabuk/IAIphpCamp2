<?php

if (isset($_GET['action'])){
	$action = $_GET['action'];
	if (isset($_GET['name'])){
		$name = $_GET['name'];
	} else {
		$name='';
	}
	if (isset($_GET['price'])){
		$price = $_GET['price'];
	} else {
		$price=0;
	}
	if (isset($_GET['product'])){
		$id=$_GET['product'];
	}
} else {
	echo 'Błąd';
	die;
}


$link = mysqli_connect("localhost", "php2", "jcSxS71poOmxo4pu", "Czwartek");
if ($link->connect_errno){
	echo 'Błąd połączenia z bazą';
	die;
}

$res='';
switch ($action){
	case 'checkProduct':	$stmt = $link->prepare("SELECT * FROM `products` WHERE `id` = ?");
							$stmt->bind_param('i', $id);
							$stmt->execute();

							$result = $stmt->get_result();
							
							while ($row = $result->fetch_assoc()) {
								$res = json_encode($row);
							}
							break;
	
	case 'addProduct':		$stmt = $link->prepare("INSERT INTO `products` (`id`, `nazwa`, `cena`) VALUES (?, '?', '?')");
							$stmt->bind_param('isi', $id, $name, $price);
							$stmt->execute();
	
	case 'removeProduct':	$stmt = $link->prepare("DELETE FROM `products` WHERE `products`.`id` = ?");
							$stmt->bind_param('i', $id);
							$stmt->execute();
							break;
	default:				echo 'błędne dane';
}
echo $res;