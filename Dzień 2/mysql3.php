<?php
	$link = mysqli_connect ("localhost", "root", "");
	mysqli_select_db($link, "phpcamp_jprzeworski");
	
	$query = "SELECT SQL_CALC_FOUND_ROWS * FROM table WHERE id > 100 LIMIT 10";
	$query2 = "SELECT FOUND_ROWS()";
	
	mysqli_query($link, $query);
	mysqli_query($link, $query2);
?>