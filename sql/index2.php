<?php
//@require_once "SqlClass.php";
    require_once "connect.php";

$link = mysqli_connect($host, $db_log, $db_pass);
mysqli_select_db($link, $db_name);
$zapytanie = "SELECT * FROM `clients` WHERE `name` LIKE 'T%'";
$resultHandle = mysqli_query($link, $zapytanie);
$rowsFetched = mysqli_num_rows($resultHandle);
$rowsAffected = mysqli_affected_rows($link);
    while($data = mysqli_fetch_assoc($resultHandle)){
        foreach ($data as $key => $value) {
            //echo $value." ";
        }
    }
?>
