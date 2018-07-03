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
	echo '<input type="text" size="20" name="city" placeholder="Miasto" /><br />';
	
} else {

$link = mysqli_connect("localhost", "php", "dlTPxr4tHUmefOMR");

mysqli_select_db($link, "phpcamp_plica");

$query = "SELECT * FROM `clients` WHERE 1 limit 15";
$resultHandle = mysqli_query($link, $query);

if (mysqli_num_rows($resultHandle) > 0) {
	echo '<table>';
    while($row = mysqli_fetch_assoc($resultHandle)) {
        //var_dump($row);
		echo '<tr>';
		foreach ($row as $col){
			echo '<td>'.$col.'</td>';
		}
		echo '</tr>';
		
    }
	echo '</table>';
} else {
	echo 'Brak wyników';
}
}