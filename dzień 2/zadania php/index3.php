<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'phpcamp_pz';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_GET['edytuj']))
{
	$id = (int) $_GET['edytuj'];
	
	$id = $conn->real_escape_string($id);	
	
	$sql = "SELECT * FROM clients WHERE id = $id";
	$result = $conn->query($sql);
	$klient = $result->fetch_assoc();	
	
	
	
	
	
	$date = new DateTime($klient['date_of_birth']);
	echo '
	<h1>Edytuj klienta nr '.$klient['id'].' :)</h1>
	<form action="?edytuj='.$klient['id'].'" method="POST">
	Imię:<br/>
	<input type="text" name="name" value="'.$klient['name'].'"><br/>
	Nazwisko:<br/>
	<input type="text" name="surname" value="'.$klient['surname'].'"><br/>
	Płeć: <br/>
	<select name="gender">
	<option value="male"'.($klient['gender'] == "male" ? 'selected="selected"'  :  "").'>male</option>
	<option value="female"'.($klient['gender'] == "female" ? 'selected="selected"'  :  "").'>female</option>
	<option value="unknown"'.(($klient['gender'] != "female" && $klient['gender'] != "male" )? 'selected="selected"'  :  "").'>unknown</option>
	</select><br/>
	Data urodzenia:<br/>
	<input type="date" name="date_of_birth" value="'.$date->format('Y-m-d').'"><br/>
	Liczba zamówień:<br/>
	<input type="text" name="orders_count" value="'.$klient['orders_count'].'"><br/>
	Ulica:<br/>
	<input type="text" name="street" value="'.$klient['street'].'"><br/>  
	Miasto:<br/>
	<input type="text" name="city" value="'.$klient['city'].'"><br/>
	Kod pocztowy:<br/>
	<input type="text" name="postcode" value="'.$klient['postcode'].'"><br/>   
	Państwo:<br/>
	<input type="text" name="country" value="'.$klient['country'].'"><br/>  
	Notatki:<br/>
	<textarea rows="4" cols="50" name="notes">'.$klient['notes'].'</textarea>  
	<br/><input type="submit" value="Wyślij!" name="zapisz">
	</form><br/><br/>';	
}
else
{
	$sql = "SELECT COUNT(id) AS rekordow FROM clients";
	$result = $conn->query($sql);
	$liczba_klientow = $result->fetch_assoc();
	$liczba_klientow = $liczba_klientow['rekordow'];
	$na_stronie = 100;
	$liczba_stron = ceil($liczba_klientow / $na_stronie);
	for($i=1; $i<=$liczba_stron; $i++)
	{
		echo '<a href="?strona='.$i.'">Strona '.$i.'</a> | ';
	}

	if (isset($_GET['strona']))
	{
		if ($_GET['strona'] < 1 || $_GET['strona'] > $liczba_stron){
			$strona = 1;
		}
		else{
			$strona = $_GET['strona'];
		}
	}
	else{
		$strona = 1;
	}

	$od = $na_stronie * ($strona - 1);
	$sql = "SELECT * FROM clients ORDER BY id DESC LIMIT $od , $na_stronie";
	$result = $conn->query($sql);
	echo '<h2>Strona '.$strona.' - rekordów '.$na_stronie.'</h2>';
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo 'id: ' . $row['id']. ' imie: ' .$row['name']. ' nazwisko: ' .$row['surname']. ' płeć: ' .$row['gender']. ' data urodzenia: ' .$row['date_of_birth'];
			echo ' <a href="?edytuj='.$row['id'].'">Edytuj (ID='.$row['id'].')</a><br/>';
		}
	} else {
		echo "0 results";
	}
}
$conn->close();
?>