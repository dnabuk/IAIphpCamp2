<?php
require_once "../LoginDatabase.php";

$connect = mysqli_connect("$host", "$db_user", "$db_password", "$db_name");
$connect->set_charset("utf8");
if (!$connect) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$query = 'SELECT * FROM clients WHERE id= ' . $_GET['id'];
//$query = 'SELECT * FROM clients WHERE id= ' . mysqli_escape_string($connect, $_GET['id']);
if ($result = $connect->query($query)){
    if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
            echo  $row['id'] . ' ' . $row['name'] . ' ' . $row['gender'] . '<br />';
        }
    }
}

