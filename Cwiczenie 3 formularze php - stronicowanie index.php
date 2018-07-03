<?php
$link = mysqli_connect("localhost", "php", "dlTPxr4tHUmefOMR");

mysqli_select_db($link, "phpcamp_plica");

$query = "SELECT count(*) AS 'max' FROM `clients` WHERE 1";
$resultHandle = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($resultHandle);

$naStrone = 100;
$max = round(($row['max']/$naStrone), 0, PHP_ROUND_HALF_DOWN);

//var_dump($max);

$strona=0;
if (!empty($_GET)) {
	$strona = $_GET['s'];
}
if ($strona>=$max) $strona=$max;
if ($strona<0) $strona=0;
if ($strona > 0) {
	$poprzednia=$strona-1;
	echo '<a href=?s='.$poprzednia.'><--poprzednia</a> '.$strona.' ';
}
if ($strona < $max) {
	$nastepna=$strona+1;
	echo '<a href=?s='.$nastepna.'>nastepna --></a>';
}


$query = "SELECT * FROM `clients` WHERE 1 limit $naStrone OFFSET ".($strona*$naStrone);
$resultHandle = mysqli_query($link, $query);

if (mysqli_num_rows($resultHandle) > 0) {
	echo '<table>';
	$i=0;
    while($row = mysqli_fetch_assoc($resultHandle)) {
        //var_dump($row);
		echo '<tr><td>'.($strona*$naStrone+$i).'</td>';
		foreach ($row as $col){
			echo '<td>'.$col.'</td>';
		}
		echo '</tr>';
		$i++;
    }
	echo '</table>';
} else {
	echo 'Brak wyników';
}

if ($strona > 0) {
	$poprzednia=$strona-1;
	echo '<a href=?s='.$poprzednia.'><--poprzednia</a> '.$strona.' ';
}
if ($strona < $max) {
	$nastepna=$strona+1;
	echo '<a href=?s='.$nastepna.'>nastepna --></a>';
}