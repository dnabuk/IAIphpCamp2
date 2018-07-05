<?php
    $ch = curl_init('http://localhost/PHP4/PHP4.php?action=checkProduct&name=kubek'); //zadeklarowanie curla z dokładnym adresem
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //ustawianie curla
    $result = curl_exec($ch); //wykonanie curla
    print_r($result); //wyświetlenie
    
    
?>

