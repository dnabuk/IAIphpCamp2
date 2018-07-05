<?php
    $url = curl_init('http://localhost/Camp2/pl.phpcamp/DzienCzwart_ApiRestAJAX/Cwiczenie3.php?action=checkProduct&id=1&nazwa=Kubek&cena=30');
    curl_setopt($url, CURLOPT_RETURNTRANSFER,true); // nie ma byc automatycznie tylko do zmiennej
    $result = curl_exec($url);
    //print_r($result);
    $response = json_decode($result, true);
    var_dump($response);
