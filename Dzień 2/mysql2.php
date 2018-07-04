<?php
	if(!empty($_POST))
	{
		$link = mysqli_connect ("localhost", "root", "");
		mysqli_select_db($link, "phpcamp_jprzeworski");
		
		$name = $_POST["name"];
		$surname = $_POST["surname"];
		$gender = $_POST["gender"];
		$date_of_birth = $_POST["date_of_birth"];
		//$date_of_birth = "1990-12-12";
		$street = $_POST["street"];
		$city = $_POST["city"];
		
		echo $name . " " . $surname . " " . $gender . " " . $date_of_birth . " " . $street . " " . $city;
		
		$query = "INSERT INTO `clients` (`name`, `surname`, `gender`, `date_of_birth`, `street`, `city`) 
		VALUES ('".$name."', '".$surname."', '".$gender."', '".$date_of_birth."', '".$street."', '".$city."')";
		
		mysqli_query($link, $query);
		var_dump(mysqli_error($link));
	}
?>