<?php
require 'connect.php';

if (isset($_GET['action'])) {
	if ($_GET['action'] == 'checkProduct') {
		$name = $_GET['name'];
		$query="SELECT * from `product` WHERE nazwa='$name'";
if($result= mysqli_query($link,$query)){
	while ($data= mysqli_fetch_assoc($result)) {
		var_dump($data);
	}
	}}
	if ($_GET['action'] == 'addProduct'){
		$name=$_GET['name'];
		$price=$_GET['price'];
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
		$id=$_GET['id'];
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



	
}