<?php 
require 'connect.php';
$query="SELECT name, surname, city FROM `clients` limit 10";
$result= mysqli_query($link,$query);
while ($data= mysqli_fetch_assoc($result)) {
	var_dump($data);
}
