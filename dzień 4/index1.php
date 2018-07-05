<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'phpcamp_pz';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$product = $_GET['product'];
$action = $_GET['action'];
$name = $_GET['name'];
$price = $_GET['price'];

if(isset($product) && isset($action) && isset($name) && isset($price))
{
		if($action == 'checkProduct')
		{
			$sql = "SELECT * FROM product WHERE product_id = '$product'";
			$wynik = $result->fetch_assoc();
			print_r($wynik);
			
		}
		else if($action == 'addProduct')
		{
			
		}
		else if($action == 'removeProduct')
		{
			
		}

		else
		{
			
		}
}