<?php

$ch = curl_init('http://localhost/gitdemo/day4/?nazwa=szalik&action=addProduct&id=10&cena=999');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

$response = json_decode($result, true);
//print_r($response);
echo '<pre>';
var_dump($response);
echo '</pre>';
