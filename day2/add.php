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
		$date_of_birth = $_POST['date_of_birth'];
		$orders_count = $_POST['orders_count'];
		$street = $_POST['street'];
		$city = $_POST['city'];
		$postcode = $_POST['postcode'];
		$country = $_POST['country'];
		if ($rezultat = @$link->query("INSERT INTO clients (name, surname, gender, date_of_birth, orders_count, street, city, postcode, country) VALUES ('$name', '$surname', '$gender', '$date_of_birth', '$orders_count', '$street', '$city', '$postcode', '$country')"))
		{
			
				echo 'Dodano</br><a href="formularz.html">powrot</a>';
		} 
		else 
		{
			echo 'err';
		}
			
	}
		
	$link->close();


?>
