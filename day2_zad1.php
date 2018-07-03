<?php
/*$mysqli = new mysqli('localhost', 'root','' ,'phpcamp_kkucinska');
if ($mysqli->connect_error) {
    // w przypadku błędu (od wersji PHP 5.3), wyświetli się odpowiedni komunikat
    die('Connect Error ('.$mysqli->connect_errno.') '. $mysqli->connect_error);
    // w przypadku błędu (do wersji PHP 5.3), wyświetli się odpowiedni komunikat
    if (mysqli_connect_error()) {
       die('Connect Error (' . mysqli_connect_errno() . ') '
       . mysqli_connect_error());
    }
}*/
?>
<form name="form" method="post" action="day2_zad2.php">
Podaj swoje imię:<br>
<input type="text" name="name"><br>
Podaj swoje nazwisko<br>
<input type="text" name="surname"><br>
Wbierz swoja płeć<br>
<select name="gender"><br>
	<option value="male">Male</option>
	<option value="female">Female</option>
	<option value="unknown">Unknown</option>
</select>
Podaj swoją date urodzenia<br>
<input type="date" name="date_of_birth"><br>
Podaj ulice zamieszkania<br>
<input type="text" name="street"><br>
Podaj miasto zamieszkania<br>
<input type="text" name="city"><br>
Podaj swoj kod pocztowy<br>
<input type="text" name="postcode"><br>
<input type="submit" name="submit" value="wyślij">
</form>
