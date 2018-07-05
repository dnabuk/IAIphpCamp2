<?php
$ch=curl_init('http://127.0.0.1/dayfour/json.php?action=checkProduct&name=towar3');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
$response=json_decode($result,true);
print_r($response);