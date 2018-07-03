<?php
	include("connect.php");

	$i=$_GET['id'];
	$zap="select * from clients where id=$i";
	$wynik=mysqli_query($link,$zap);
	while($w=mysqli_fetch_row($wynik)){
		echo $w[1]." ".$w[2];}
?>