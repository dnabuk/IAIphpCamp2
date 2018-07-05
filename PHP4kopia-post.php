<?php
    $item = array('name' => 'produkt13', 'product' => 321, 'price' => 12.22);
    
    $data = json_encode($item);
    $ch = curl_init('http://localhost/PHP4/PHP4kopia-rest.php/products/kubek'); //zadeklarowanie curla z dokładnym adresem, katalogowo
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //ustawianie curla
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    $result = curl_exec($ch); //wykonanie curla
    $response = json_decode($result, true);
?>
