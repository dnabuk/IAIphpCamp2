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
if (!empty($_GET['s'])) {
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

if (!empty($_GET['edit'])) {
	$eID = $_GET['edit'];
} else {
	$eID=null;
}

if (!empty($_POST)){
	$eID=$_POST['eID'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$code = $_POST['code'];
	
	$query = "UPDATE `clients` SET `name` = '$name', `surname` = '$surname', `street` = '$street', `city` = '$city', `postcode` = '$code' WHERE `clients`.`id` = $eID";
	//echo '<br>'.$query.'<br>';
	
	if (!mysqli_query($link, $query)) {
		echo "<br />BŁĄD AKTUALIZACJI: " . mysqli_error($link).'<br />';
	}
	$eID=null;
}

$query = "SELECT * FROM `clients` WHERE 1 limit $naStrone OFFSET ".($strona*$naStrone);
$resultHandle = mysqli_query($link, $query);

if (mysqli_num_rows($resultHandle) > 0) {
	echo '<table>';
	$i=0;
	echo '<tr><td>nr</td><td>ID</td><td>Imię</td><td>Nazwisko</td><td>Płeć</td>';
	echo '<td>Data urodzenia</td><td>Ulica</td><td>Miasto</td><td>Kod pocztowy</td><td>Edycja</td>';
    while($row = mysqli_fetch_assoc($resultHandle)) {
        //var_dump($row);
		
		echo '<tr><td>'.($strona*$naStrone+$i).'</td>';
		echo '<td>'.$row['id'].'</td>';
		if ($eID !== $row['id']){
			echo '<td>'.$row['name'].'</td>';
			echo '<td>'.$row['surname'].'</td>';
			echo '<td>'.$row['gender'].'</td>';
			echo '<td>'.preg_replace('/\s[0-9]{2}:[0-9]{2}:[0-9]{2}/', '', $row['date_of_birth']).'</td>';
			echo '<td>'.$row['street'].'</td>';
			echo '<td>'.$row['city'].'</td>';
			echo '<td>'.$row['postcode'].'</td>';
			echo '<td><a href="?s='.$strona.'&edit='.$row['id'].'">edytuj</a></td>';
		} else {
			echo '<form method="POST" action="index.php?s='.$strona.'">';
			echo '<td><input type="text" name="name" value="'.$row['name'].'" /></td>';
			echo '<td><input type="text" name="surname" value="'.$row['surname'].'" /></td>';
			echo '<td>'.$row['gender'].'</td>'; //select.. tylko jak łatwo zrobić wartość domyślną i pozostałe, żeby się nie powtarzały.. No nic, nie ma zmiany płci.
			echo '<td>'.preg_replace('/\s[0-9]{2}:[0-9]{2}:[0-9]{2}/', '', $row['date_of_birth']).'</td>';
			echo '<td><input type="text" name="street" value="'.$row['street'].'" /></td>';
			echo '<td><input type="text" name="city" value="'.$row['city'].'" /></td>';
			echo '<td><input type="text" name="code" value="'.$row['postcode'].'" /></td>';
			echo '<input type="hidden" name="eID" value="'.$eID.'" />';
			echo '<td><input type="submit" /></td></form>'; //zapis metodą post, jakiś token?
		}
		/*
		foreach ($row as $col){
			echo '<td>'.preg_replace('/\s[0-9]{2}:[0-9]{2}:[0-9]{2}/', '', $col).'</td>'; //tak, poszedłem na łatwiznę ;)
		}
		*/
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