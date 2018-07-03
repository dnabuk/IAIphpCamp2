<?php 
require 'connect.php';
$id=$_GET['id'];
$query="SELECT * from `clients` INNER JOIN `orders` ON clients.id=orders.client_id where id=$id"; //. mysqli_real_escape_string($link,$id);
if($result= mysqli_query($link,$query)){
while ($data= mysqli_fetch_assoc($result)) {
	//var_dump($data);
	echo $data['name'];
}
}
