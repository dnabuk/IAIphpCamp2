<?php
require_once "connect.php";

$name=$_POST['name'];
$surname=$_POST['surname'];
$gender=$_POST['gender'];
$date=$_POST['date'];

$link = mysqli_connect($host, $db_log, $db_pass);
mysqli_select_db($link, $db_name);
$zapytanie = "INSERT INTO `clients` (`name`, `surname`, `gender`, `date_of_birth`) VALUES ('$name', '$surname', '$gender', '$date')";
$resultHandle = mysqli_query($link, $zapytanie);



?>