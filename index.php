<?php 
include_once("connect.php");
include_once("functions.php");
if((isset($_GET['id']))
	&&(isset($_GET['action']))
	&&(isset($_GET['name']))
	&&(isset($_GET['price']))){
		$id=$_GET['id'];
		$name=$_GET['name'];
		$price=$_GET['price'];
		$action=$_GET['action'];
		switch ($action) {
			case 'checkProduct':
				wysw($link,$name);
				break;
			case 'addProduct':
				$zap="insert into products(id,nazwa,cena)values('$id','$name','$price');";
				mysqli_query($link,$zap);
				wysw($link,'0');
				break;
			
			case 'removeProduct':
				$zap="delete from products where id='$id';";
				mysqli_query($link,$zap);
				wysw($link,'0');
				break;
			default:echo"zła akcja<br/>";break;
			};
		}else{
			echo "błąd";}
?>