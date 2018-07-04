<?php
include_once('db_config.inc');

$mysqliConnection = mysqli_connect('127.0.0.1', 'root', '');

$mysqliConnection->select_db($dbName);

$query = 'DELETE FROM `clients` WHERE id =?';


$stmt = $mysqliConnection->prepare($query);
$stmt->bind_param("i", $_GET['id']);

if ($stmt->execute()) {
    echo 'Zapytanie wykonane popranie';
} else {
    echo 'Blad zapytania';
}

$result->free_result();