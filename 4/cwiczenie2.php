<?php
$ch = curl_init('http://localhost/PHPCamp/4/cwiczenie1.php?action=checkProduct&name=komputer');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec($ch);
//print_r($result);
//$response=json_decode($response,true);

var_dump(json_decode($result,true));
