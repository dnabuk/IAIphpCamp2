<?php
	$link = mysqli_connect ("localhost", "root", "");
	mysqli_select_db($link, "phpcamp_jprzeworski");
	
	$query = "SELECT * FROM `clients` LIMIT 10;";
	$resultHandle = mysqli_query($link, $query);
	$rowsFetched = mysqli_num_rows($resultHandle);
	$rowsAffected = mysqli_affected_rows($link);
	
	while($row = mysqli_fetch_assoc($resultHandle))
	{
		print '<pre>' . htmlspecialchars(var_export($row, 1));
	}
?>