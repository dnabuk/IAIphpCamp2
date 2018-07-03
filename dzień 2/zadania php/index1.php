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
  <input type="date" name="street"><br/>  
  Miasto:<br/>
  <input type="date" name="city"><br/>
  Kod pocztowy:<br/>
  <input type="date" name="postcode"><br/>   
  Państwo:<br/>
  <input type="text" name="country" value="<?php echo $panstwa[$los]; ?>"><br/>  
  Notatki:<br/>
  <textarea rows="4" cols="50">Przykładowa notatka klienta :)</textarea>  
  <br/><input type="submit" value="Zapisz klienta!">
</form>
<h2>Przykładowe 100 rekordów najnowszych :)</h2>
<?php 

print_r($_POST);

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'phpcamp_pz';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM clients ORDER BY id DESC LIMIT 100";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo 'id: ' . $row['id']. ' imie: ' .$row['name']. ' nazwisko: ' .$row['surname']. ' płeć: ' .$row['gender']. ' data urodzenia: ' .$row['date_of_birth']. '<br/>';
    }
} else {
    echo "0 results";
}
$conn->close();
?>