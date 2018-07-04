<?php

function cipher($jawny){
	$szyfrogram=iconv(auto,'ASCII',$jawny);
	echo $szyfrogram;
	$p = 71;
	$q = 73;
	$N = $p*$q;
	$euler =($p-1)*($q-1);
	$e=31;
	$d=(($e)^-1)%$euler;
	//$c = (($szyfrogram)^$e)%$N;
	//$odp = ASCII_bin_to_text($c,' ');
	//echo $odp;
}


$id=$_GET['id'];

$mysqli = mysqli_connect('localhost', 'root','' ,'phpcamp_kkucinska');
if ($mysqli->connect_error) {
	die('Connect Error ('.$mysqli->connect_errno.') '. $mysqli->connect_error);
}
$result = mysqli_query($mysqli,"SELECT id, name, surname, gender, date_of_birth, street, city, postcode FROM `clients` WHERE id= '$id'");
$row = $result->fetch_assoc();
cipher('takatam')
?>
<form name="form" method="post" action="day2_zad5.php?id=<?php echo $id;?>">
Podaj swoje imię:<br>
<input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
Podaj swoje nazwisko<br>
<input type="text" name="surname" value="<?php echo $row['surname']; ?>"><br>
Wbierz swoja płeć<br>
<select name="gender" ><br>
	<option value="male" <?php if ($row['gender']== 'male') echo 'selected'; ?>>Male</option>
	<option value="female" <?php if ($row['gender']== 'female') echo 'selected'; ?>>Female</option>
	<option value="unknown" <?php if ($row['gender']== 'unknown') echo 'selected'; ?>>Unknown</option>
</select>
<br>
Podaj swoją date urodzenia<br>
<input type="date" name="date_of_birth" value="<?php echo substr($row['date_of_birth'], 0,10); ?>"><br>
Podaj ulice zamieszkania<br>
<input type="text" name="street" value="<?php echo $row['street']; ?>"><br>
Podaj miasto zamieszkania<br>
<input type="text" name="city" value="<?php echo $row['city']; ?>"><br>
Podaj swoj kod pocztowy<br>
<input type="text" name="postcode" value="<?php echo $row['postcode']; ?>"><br>
<input type="submit" name="submit" value="wyślij">
</form>