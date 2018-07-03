<?php

if (empty($_POST)){
	echo '<form action="index.php" method="POST">';
	echo '<input type="text" size="20" name="name" placeholder="Imię" /><br />';
	echo '<input type="text" size="20" name="surname" placeholder="Nazwisko" /><br />';
	echo '<input type="text" size="20" name="street" placeholder="Ulica" /><br />';
	echo '<input type="text" size="20" name="code" placeholder="Kod pocztowy" /><br />';
	echo '<input type="text" size="20" name="city" placeholder="Miasto" /><br />';
	
	echo 'Płeć: <select name="gender">';
	echo '<option value="male">Mężczyzna</option>';
	echo '<option value="female">Kobieta</option>';
	echo '<option value="unknown">Sam nie wiem</option>';
	echo '</select><br />';
	
	echo 'Data urodzenia: <input type="date" size="20" name="birth_date" /><br />';
	echo '<input type="submit" /></form>';
} else {

$link = mysqli_connect("localhost", "php", "dlTPxr4tHUmefOMR");

mysqli_select_db($link, "phpcamp_plica");

$imie=$_POST['name'];
$nazwisko=$_POST['surname'];
$ulica=$_POST['street'];
$kod=$_POST['code'];
$miasto=$_POST['city'];
$plec=$_POST['gender'];
$data=$_POST['birth_date'];

//echo $imie.' '.$nazwisko.' '.$ulica.' '.$kod.' '.$miasto.' '.$plec.' '.$data;
echo 'Witaj '.$imie.'!<br>Dziękujemy za rejestrację.';
$query = "INSERT INTO `clients` (`id`, `name`, `surname`, `gender`, `date_of_birth`, 
`orders_count`, `street`, `city`, `postcode`, `country`, `notes`) 
VALUES (NULL, '$imie', '$nazwisko', '$plec', '$data', 
floor(RAND()*(100)+3), '$ulica', '$miasto', '$kod', '1', '');";
$resultHandle = mysqli_query($link, $query);

}