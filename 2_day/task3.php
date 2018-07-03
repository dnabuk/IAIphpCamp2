<?php 
require 'connect.php';
$id=$_GET['id'];
$query="SELECT name, surname, city FROM `clients` where id=$id";
$result= mysqli_query($link,$query);
while ($data= mysqli_fetch_assoc($result)) {
	var_dump($data);
}
