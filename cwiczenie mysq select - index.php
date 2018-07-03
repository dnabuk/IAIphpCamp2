<?php

//$link = mysqli_connect("localhost", "root", "");
//wcześniej źle utworzyłem użytkownika

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