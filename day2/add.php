<?php


	require_once "connect.php";

	$link = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($link->connect_errno!=0)
	{
		echo "Error: ".$link->connect_errno;
	}
	else
	{
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$gender = $_POST['gender'];
		$city = $_POST['city'];
		if ($rezultat = @$link->query("INSERT INTO clients (name, surname, gender, city) VALUES ('$name', '$surname', '$gender', '$city')"))
		{
			
				echo 'Dodano';
		} 
		else 
		{
			echo 'err';
		}
			
	}
		
	$link->close();


?>
