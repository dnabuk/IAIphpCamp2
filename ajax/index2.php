<?php
$ch = curl_init('http://localhost/czwartek/api.php/'.$_SERVER['PATH_INFO']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
//echo $result;

$tab = json_decode($result, true);
print_r($tab);
echo '<br>';