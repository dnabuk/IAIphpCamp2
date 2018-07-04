<?php
$imie = $_POST['name'];
$nazwisko = &$_POST['surname'];
$gender = $_POST['gender'];
$link = mysqli_connect('127.0.0.1', 'root', '');
var_dump(mysqli_select_db($link,"a_major"));
$ins = mysqli_query($link,"INSERT INTO `clients` (`id`, `name`, `surname`, `gender`, `date_of_birth`, `orders_count`, `street`, `city`, `postcode`, `country`, `notes`) VALUES (NULL, '$imie', '$nazwisko', '$gender', '', '', '', '', '', '', '');
");

var_dump(mysqli_error($link));
if($ins) echo "Rekord został dodany poprawnie";
else echo "Błąd nie udało się dodać nowego rekordu";

mysqli_close($link);