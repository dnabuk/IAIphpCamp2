<?php



$servername = "localhost";
$username = "patrycjusz";
$password = "1234";
$dbname = "phpcamp_pnowaczyk";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
$conn->select_db($dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = 'SELECT * FROM clients WHERE id=' . $_GET['id'];
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row['id'] . ' ' . $row['name'] . ' ' . $row['gender'] . '<br>';
    }
} else {
    echo "0 results";
}



$result->free_result();


 ?>
