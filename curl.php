<?php
$ch = curl_init('http://localhost/day1/json.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$result = curl_exec($ch);
var_dump(json_decode($result, true));