<?php


$servername = "localhost";
$username = "patrycjusz";
$password = "1234";
$dbname = "phpcamp_pnowaczyk";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, name, surname, city FROM clients WHERE orders_count<'50'";




$result = mysqli_query($conn, $sql);

var_dump($result);

echo "</br></br>";


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["surname"] . " - City: " . $row["city"] . "<br>";
    }
} else {
    echo "0 results";
}




mysqli_close($conn);
?>
