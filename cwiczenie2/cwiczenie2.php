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

$name=$_POST['name'];
$surname=$_POST['surname'];
$gender=$_POST['gender'];
$city=$_POST['city'];
$sql = "INSERT INTO clients (name, surname, gender, city)
VALUES ('$name','$surname','$gender','$city')";

mysqli_query($conn, $sql);

mysqli_close($conn);

 ?>
