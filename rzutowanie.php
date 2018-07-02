<?php

$a = 1 + '1'; // 2
echo $a."<br>";

$a = 1 + '-1.1'; // -1.1
echo $a."<br>";

$a = 1 + '-0.3e3'; // -300
echo $a."<br>";

//$a = 1 + '30 uczestników'; // 31, bo drugi wyraz zrzutuje do 30, a po 30 nic nie ma do rzutowania na liczbê
echo $a."<br>";

//$a = 1 + '#2 PHP Camp'; // 1, bo drugi wyraz zrzutuje do zera, bo nie mo¿e zrzutowaæ # na liczbê
echo $a."<br>";

$a = '1' + 1; // 2
echo $a."<br>";

$a = 1 . 1 + 1; // 12 
echo $a."<br>";

$a = 1 + 1 . 1; // '21'
echo $a."<br>";

//$a = 1. .1 + 1; // int 11
echo $a."<br>";

?>