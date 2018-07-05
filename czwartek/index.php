<?php
$action='checkProduct';
$id=2;
$ch = curl_init('http://localhost/czwartek/api.php?action='.$action.'&product='.$id);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
print_r($result);