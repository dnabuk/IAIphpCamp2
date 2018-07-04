<?php
	include("connect.php");

	$i=$_GET['id'];
	$zap='delete * from clients where id='.$i;
	echo $zap;
	
	mysqli_query($link,$zap);
	
?>