<?php

$connect = new mysqli("localhost", "root", "", "phpcamp_gworonowska");

if (!$connect) {
    echo "Error!"; 
}

else {

	$sql = "SELECT `id`, `name` FROM `clients` WHERE `gender` = 'male' LIMIT 5";
	$result = $connect->query($sql);
	$control = $result->num_rows;
	if ($control > 0) {
    	while($row = $result->fetch_assoc()) {
    		print '<pre>';
			var_dump($row);
			print '</pre>';
			print '<br />';
    	}
    	
	} 
	else {
    	echo "0 results";
	}
	
}

mysqli_close($connect);

?>