<?php
include_once("connect.php");
include_once("functions.php");


$path=$_SERVER['REQUEST_URI'];
//var_dump($_SERVER);die;
$pathArray=explode('/',$path);
//var_dump($pathArray);
$op=$pathArray[3];
$id=$pathArray[4];
$name=$pathArray[5];
$price=$pathArray[6];;


switch($op){
	case 'del':
		$zap="delete from products where id=$id";
		mysqli_query($link,$zap);
		wysw();
		break;
		
	case 'dod':
		$zap="insert into products(id,nazwa,cena)values('$id','$name','$price')";
		mysqli_query($link,$zap);
		wysw();
		break;
		
	case 'akt':
		$zap="update products set nazwa='$name', cena='$price' where id='$id'";
		mysqli_query($link,$zap);
		wysw();
		break;
	
	default: break;
	}

?>