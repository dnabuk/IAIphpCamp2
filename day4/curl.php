<?php



$ch = curl_init('http://localhost/gitdemo/day4/api.php/productsList/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);

$productList = json_decode($response, 1);
print_r($productList);
die;
