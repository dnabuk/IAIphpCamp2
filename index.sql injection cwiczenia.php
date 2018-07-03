<?php
$link = mysqli_connect("localhost", "php", "dlTPxr4tHUmefOMR");

mysqli_select_db($link, "phpcamp_plica");

$id = $_GET['id'];
$query = "SELECT * FROM `clients` WHERE `id` like $id";
$resultHandle = mysqli_query($link, $query);

if (mysqli_num_rows($resultHandle) > 0) {
	echo '<table>';
	$i=0;
	echo '<tr><td>ID</td><td>Imię</td><td>Nazwisko</td><td>Płeć</td>';
	echo '<td>Data urodzenia</td><td>Zamówienia</td><td>Ulica</td><td>Miasto</td><td>Kod pocztowy</td><td>Kraj</td>';
    while($row = mysqli_fetch_assoc($resultHandle)) {
        //var_dump($row);
		
		echo '<tr>';
		foreach ($row as $col){
			echo '<td>'.preg_replace('/\s[0-9]{2}:[0-9]{2}:[0-9]{2}/', '', $col).'</td>';
		}
		echo '</tr>';
		$i++;
    }
	echo '</table>';
} else {
	echo 'Brak wyników';
}