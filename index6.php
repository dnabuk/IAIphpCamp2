<?php
include('config.php');


$cc = mysqli_connect('localhost', 'root', '', 'phpcamp_hrzadzinski'); // zrobione po to aby móc użyć mysqlirealescapestring

//$get = mysqli_real_escape_string($cc,$_GET['page']);
$get = $cc->real_escape_string($_GET['page']);
$pdo = GetPDO();
if (isset($get)) {
    $off = ($get * 100) - 100;
    $lim = 100;
}
$sql = 'SELECT * FROM `clients` LIMIT ' . $lim . ' OFFSET ' . $off . '';

$c = GetPDO()->prepare($sql);

$c->execute();

$result = $c->fetchAll();

$cc->close(); //zamykanie połączenia z nieużywanym mysqli
foreach ($result as $row) {

    echo '<a href="index7.php?id=' . $row['id'] . '">' . $row['name'] . ' ' . $row['surname'] . '</a><br>';
}