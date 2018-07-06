<?php
    $ch = curl_init('http://tank.iai.ninja/api/get-current-board.php'); //zadeklarowanie curla z dokładnym adresem
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //ustawianie curla
    $result = curl_exec($ch); //wykonanie curla
    $result = json_decode($result);
    print '<pre>';
    //var_export($result);
    $key = file_get_contents('key.dat');
    
    echo "<div id='klucz' style='display:none;'>".$key."</div>";
?>

