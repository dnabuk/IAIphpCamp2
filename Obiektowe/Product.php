<?php
require_once "NaukaClass.php";

$wywolaj_obj = new Product();
$wywolaj_obj ->test="tutaj cos NOWEGO";
var_dump($wywolaj_obj);

$wywolaj_obj->SetPrice(30);
var_dump($wywolaj_obj);
echo "wypluj coś na koncu";

$wywolaj_obj ->GetPrice();
var_dump($wywolaj_obj);
die("koncze skrypt");