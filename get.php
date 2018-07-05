<?php 
$ch=curl_init('http://localhost/phpcamp%205.07/api.php/productList/mleko');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$response =curl_exec($ch);
$productsList=json_decode($response,1);

print_r($productsList);die;
?>