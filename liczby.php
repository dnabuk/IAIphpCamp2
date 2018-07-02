<?php
$a = 1 + '1';
echo $a . gettype($a);
echo "\n";
$b= 1 + '-1.1';
echo $b . gettype($b);
echo "\n";

$c= 1 + '-0.3e3';
echo $c . gettype($c);
echo "\n";

$d= 1 + '30 uczestników';
echo $d . gettype($d);
echo "\n";

$e= 1 + '#2 PHP Camp';
echo $e . gettype($e);
echo "\n";

$d ='1' + 1;
echo $d . gettype($d);
echo"\n";

$g =1 . 1 + 1;
echo $g . gettype($g);
echo"\n";

$h =1 + 1 . 1;
echo $h . gettype($h);
echo"\n";

$i = 1. . 1 + 1;
echo $i . gettype($i);
echo"\n";
?>
