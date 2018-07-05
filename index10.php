<?php

$ch = curl_init('http://localhost/phppc/index9.php?action=show&product=5');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
echo $result;