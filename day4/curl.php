<?php

$ch = curl_init('http://localhost/gitdemo/day4/?nazwa=kubek&action=checkProduct');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

print_r($result);