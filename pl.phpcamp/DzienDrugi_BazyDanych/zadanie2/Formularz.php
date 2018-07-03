<?php
if ((!isset($_POST['name'])) || (!isset($_POST['surname'])) || (!isset($_POST['gender']))) {
    header('Location: zad2Form.php');
    exit();
}
require_once "../LoginDatabase.php";

$name = $_POST['name'];
$surname = $_POST['surname'];
$gender = $_POST['gender'];
$randomValue = rand(0, 1000);

$connect = mysqli_connect("$host", "$db_user", "$db_password", "$db_name");
$connect->set_charset("utf8");
if (!$connect) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$query = "INSERT INTO `clients` SET `name`= '$name', `surname` = '$surname', `gender` = '$gender', `orders_count` = '$randomValue', `city` = '1'";
if ($connect->query($query) === TRUE) {
    header('Location: zad2Form.php');
    exit();
}else {
    echo "Error: " . $query . "</br>" . $connect->error;
}
mysqli_close($connect);
