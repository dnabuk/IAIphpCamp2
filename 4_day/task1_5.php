<?php
require 'connect.php';

if (isset($_GET['action'])) {
	if ($_GET['action'] == 'checkProduct') {
		if (!isset($_GET['name'])) {
			echo "Podaj nazwę produktu";
			die();
		}
		$name = mysqli_real_escape_string($link,htmlentities($_GET['name']));
		$query="SELECT * from `product` WHERE nazwa='$name'";
		if($result= mysqli_query($link,$query)){
			if (mysqli_num_rows($result)==0) {
				echo 'Brak porduktu o podanyej nazwie';
				die();
			}
			while ($data= mysqli_fetch_assoc($result)) {
				var_dump($data);
			}
		}
	}
	if ($_GET['action'] == 'addProduct'){
		if (!isset($_GET['name'])) {
			echo "Podaj nazwę produktu";
			die();
		}
		if (!isset($_GET['price'])) {
			echo "Podaj nazwę produktu";
			die();
		}
		$name = mysqli_real_escape_string($link,htmlentities($_GET['name']));
		$price = mysqli_real_escape_string($link,htmlentities($_GET['price']));
		$query_ins="INSERT INTO `product` values(null,'$name','$price')";
		if(!$result= mysqli_query($link,$query_ins)){
			echo (mysqli_error($link));
		}else{
			echo 'wysłano';
		}
		$query='SELECT * from `product`';
		if($result= mysqli_query($link,$query)){
			while ($data= mysqli_fetch_assoc($result)) {
				var_dump($data);
			}
		}
	}

	
	if ($_GET['action'] == 'removeProduct') {
		if (!isset($_GET['id']) && !empty($_GET['id'])) {
			echo "Podaj id";
			die();
		}
		$id=(int)$_GET['id'];
		$query="SELECT * from `product` WHERE id='$id'";
		if($result= mysqli_query($link,$query)){
			if (mysqli_num_rows($result)==0) {
				echo 'Brak porduktu o podanym id';
				die();
			}

		}

		$query_ins="DELETE FROM `product` WHERE id=$id";
		if(!$result= mysqli_query($link,$query_ins)){
			echo (mysqli_error($link));
		}else{
			echo 'wysłano';
		}
		$query='SELECT * from `product`';
		if($result= mysqli_query($link,$query)){
			while ($data= mysqli_fetch_assoc($result)) {
				var_dump($data);
			}
		}
	}
}else{
	echo 'Brak parametru action';
}