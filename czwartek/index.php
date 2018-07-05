<?php
$action='checkProduct';
$id=2;
$ch = curl_init('http://localhost/czwartek/api.php?action='.$action.'&product='.$id);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
print_r('JSON: '.$result);

echo '<br>Array: ';

$tab = json_decode($result);
print_r($tab);

echo '<br>';
foreach ($tab as $val) echo $val.' ';