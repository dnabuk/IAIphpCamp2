<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$gender = $_POST['gender'];
$date = $_POST['date'];
$count = rand(1, 1200);
$street = $_POST['street'];
$city = $_POST['city'];
$country = $_POST['country'];
$postcode = $_POST['postcode'];
$notes = $_POST['notes'];

mysqli_report(MYSQLI_REPORT_ALL);
	try{
		
		$connect = new mysqli("localhost", "root", "", "phpcamp_gworonowska");

		$connect->query("INSERT INTO clients VALUES (NULL, '$name', '$surname', '$gender', '$date','$count', '$street', '$city', '$country','$postcode', '$notes')");

		echo '<span style="color:red">Success! Thank you for your registration!</span>';

	}

	catch(Exception $e)
		{
			echo '<span style="color:red">Error! Please try again later</span>';
			echo '<br/>Information: '.$e;
		}



$connect->close();

?>