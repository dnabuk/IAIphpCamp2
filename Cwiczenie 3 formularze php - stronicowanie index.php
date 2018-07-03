<?php
$link = mysqli_connect("localhost", "php", "dlTPxr4tHUmefOMR");

mysqli_select_db($link, "phpcamp_plica");

$strona=0;
if (!empty($_GET)) 
	$strona = $_GET['s'];

$naStrone = 15;

if ($strona > 0) $poprzednia=$strona-1;
//if ($strona < $max) 
	$nastepna=$strona+1;
echo '<a href=?s='.$poprzednia.'><--poprzednia</a> '.$strona.' ';
echo '<a href=?s='.$nastepna.'>nastepna --></a>';

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

echo '<a href=?s='.$poprzednia.'><--poprzednia</a> '.$strona.' ';
echo '<a href=?s='.$nastepna.'>nastepna --></a>';
