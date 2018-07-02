<?php
$camp = array([1 => "Patryk", '1' => "Chowratowicz", 1.99 => "Choszczno", true => "Hahaha"]);
var_dump($camp);
$camp[4]= 34;
echo "<br>";
var_dump($camp);
$camp[]= "Kot ma Ale";
echo "<br>";
var_dump($camp);
unset($camp[5]);
echo "<br>";
var_dump($camp);
$camp[]= "Ala tez zawsze ma zawsze 'jakies ale'";
echo "<br>";
var_dump($camp);
$camp[]=array(range(1, 5));
echo "<br>";
var_dump($camp);
