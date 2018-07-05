<?php 
$ch=curl_init('http://localhost/phpcamp%205.07/api.php/productlist/id2');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result =curl_exec($ch);

print_r($result);
echo "<br/>";
$z=json_decode($result,true);

print_r($z);
?>