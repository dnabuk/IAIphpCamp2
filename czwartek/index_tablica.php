<?php
$products=[['id'=>1, 'nazwa'=>'Rower', 'cena'=>1250],['id'=>2, 'nazwa'=>'Longboard', 'cena'=>989],['id'=>3, 'nazwa'=>'Rolki', 'cena'=>199],['id'=>4, 'nazwa'=>'Kask', 'cena'=>340],['id'=>5, 'nazwa'=>'Ochraniacze', 'cena'=>140]];


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
} else {
	echo 'Błąd';
	die;
}


switch ($action){
	case 'checkProduct':		if (!isset($_GET['product'])) break;
								$id = $_GET['product'];
								foreach ($products as $row){
								//echo $row['id'];
								if($row['id']==$id){
									echo '<p>';
									foreach ($row as $col){
										echo $col.' ';
									}
									echo '</p>';
								}
							} break;
	
	case 'addProduct':		if (!isset($_GET['product'])) break;
							$id = $_GET['product'];
							array_push($products, [$id, $name, $price]); echo 'Dodano towar @'.$id; break;
	
	case 'removeProduct':	if (!isset($_GET['product'])) break;
							$id = $_GET['product'];
							foreach ($products as $key=>$row){
								//echo $row['id'];
								if($row['id']==$id){
									unset($products[$key]);
									echo 'Usunięto produkt @'.$id;
									
								}
							} break;
	default:				echo 'błędne dane';
}


echo '<p>Wszystkie:';
foreach ($products as $row){
	//echo $row['id'];
	echo '<p>';
	foreach ($row as $col){
		echo $col.' ';
	}
	echo '</p>';
}
echo '</p>';