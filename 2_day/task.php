<?php 
require 'connect.php';
$query='SELECT * from `clients` INNER JOIN `orders` ON clients.id=orders.client_id where id=$id';
$result= mysqli_query($link,$query);
while ($data= mysqli_fetch_assoc($result)) {
	var_dump($data);
}
