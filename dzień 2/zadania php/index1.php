<h1>Dodaj się do naszej bazy dancyh :)</h1>
<form action="/index1.php">
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
  
  <br/><input type="submit" value="Zapisz mnie!">
</form>
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