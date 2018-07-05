<?php

	$connect = new mysqli("localhost", "root", "", "phpcamp_gworonowska");

	$connect->select_db("phpcamp_gworonowska");

	if($connect->connect_errno != 0){ 
	    echo"Error: ".$connect->connect_errno ;
	}
	 
	else{
		$_GET['id'] = (int)$_GET['id'];

	    $sql = "SELECT * FROM `clients` WHERE `id` = " . $_GET['id'];
		$result = $connect->query($sql);
	    
	    $control = $result->num_rows;
		if ($control > 0) {
    		while($row = $result->fetch_assoc()) {
	    		echo $row['id'] . ' ' . $row['name'] . '<br/>';
    		}
    	}	
    
		$connect->close();

	}       

	?>