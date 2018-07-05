<?php
$ch = curl_init('http://localhost/PHPCamp/4/cwiczenie3_1.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec($ch);
//print_r($result);
//$response=json_decode($response,true);

echo $result;
//var_dump(json_decode($result,true));
