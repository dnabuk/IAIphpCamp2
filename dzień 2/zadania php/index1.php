<?php
$panstwa = array("Polska", "USA", "Kanada", "Niemcy", "Rosja", "Indie", "Belgia");
$los = rand(0, (count($panstwa)-1));
?>

<h1>Dodaj się do naszej bazy dancyh :)</h1>
<form action="./index1.php" method="POST">
  Imię:<br/>
  <input type="text" name="name" placeholder="Wpisz imię"><br/>
  Nazwisko:<br/>
  <input type="text" name="surname" placeholder="Wpisz nazwisko"><br/>
  Płeć:<br/>
  <select>
	  <option value="male">male</option>
	  <option value="female">female</option>
	  <option value="unknown">unknown</option>
  </select><br/>
  Data urodzenia:<br/>
  <input type="date" name="date_of_birth"><br/>
  Liczba zamówień:<br/>
  <input type="text" name="orders_count" value="<?php echo rand(1, 10000); ?>" disabled><br/>
  Ulica:<br/>
  <input type="text" name="street"><br/>  
  Miasto:<br/>
  <input type="text" name="city"><br/>
  Kod pocztowy:<br/>
  <input type="text" name="postcode"><br/>   
  Państwo:<br/>
  <input type="text" name="country" value="<?php echo $panstwa[$los]; ?>"><br/>  
  Notatki:<br/>
  <textarea rows="4" cols="50" name="notes">Przykładowa notatka klienta :)</textarea>  
  <br/><input type="submit" value="Zapisz klienta!" name="zapisz">
</form><br/><br/>
<h2>Przykładowe 100 rekordów najnowszych :)</h2>
<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'phpcamp_pz';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
function protect($string)
{
	return htmlspecialchars($string);
}
#Zapisywanie klienta start
if(isset($_POST['zapisz']))
{
	var_dump($_POST);
	
	$name = protect($_POST['name']);
	$surname = protect($_POST['surname']);
	$date_of_birth = protect($_POST['date_of_birth']);
	$orders_count = protect($_POST['orders_count']);
	$street = protect($_POST['street']);
	$city = protect($_POST['city']);
	$postcode = protect($_POST['postcode']);	
	$country = protect($_POST['country']);	
	$notes = protect($_POST['notes']);
	
	
	$sql = 'INSERT INTO clients (name, surname, gender, date_of_birth, orders_count, street, city, postcode, country, notes)
	VALUES (`'.$name.'`, `'.$surname.'`, `'.$date_of_birth.'`, `'.$orders_count.'`, `'.$street.'`, `'.$city.'`, `'.$postcode.'`, `'.$country.'`, `'.$notes.'`)';

	if ($conn->query($sql) === TRUE)
	{
		echo '<h1><font color="red">Dodano klienta!</font></h1>';
	}
	else
	{
		echo 'Error: ' . $sql . '<br/>' . $conn->error;
	}
}
#Zapisywanie klienta end
#Wyświetlanie klienta start
$sql = "SELECT * FROM clients ORDER BY id DESC LIMIT 100";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo 'id: ' . $row['id']. ' imie: ' .$row['name']. ' nazwisko: ' .$row['surname']. ' płeć: ' .$row['gender']. ' data urodzenia: ' .$row['date_of_birth']. '<br/>';
    }
} else {
    echo "0 results";
}
#Wyświetlanie klienta end
$conn->close();
?>