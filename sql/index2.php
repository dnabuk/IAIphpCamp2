<?php
    require_once "connect.php";

$link = mysqli_connect($host, $db_log, $db_pass);
mysqli_select_db($link, $db_name);
$zapytanie = "SELECT `name` FROM `clients`";
        echo "<br><br>";
        var_dump($zapytanie);
$resultHandle = mysqli_query($link, $zapytanie);
    echo "<br><br>";
    var_dump($resultHandle);
$rowsFetched = mysqli_num_rows($resultHandle);
    echo "<br><br>";
    var_dump($rowsFetched);
$rowsAffected = mysqli_affected_rows($link);
    echo "<br><br>";
    var_dump($rowsAffected);
    while($data = mysqli_fetch_assoc($resultHandle)){
        echo $data['name'];
        echo "<br>";
    }

    echo "<br><br>";

?>