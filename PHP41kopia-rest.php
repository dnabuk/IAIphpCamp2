<?php
    $ch = curl_init('http://localhost/PHP4/PHP4kopia-rest.php/products/kubek'); //zadeklarowanie curla z dokładnym adresem, katalogowo
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //ustawianie curla
    $result = curl_exec($ch); //wykonanie curla
    $response = json_decode($result, true);
    print_r($response); //wyświetlenie
?>

