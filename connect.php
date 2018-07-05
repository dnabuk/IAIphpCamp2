<?php	
    $user="root";
	$pass="";
	$host="localhost";
	$link = mysqli_connect($host, $user, $pass);
	$db=mysqli_select_db($link,"phpcamp_mobielaknew");
?>