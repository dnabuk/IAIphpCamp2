<?php
error_reporting(0);
echo '<pre>';

class A {

    public function getTime($timestamp)
    {
        return date('H:i:s',$timestamp);
    }
}


echo 'Wynik dla timestamp = ' . 1464847575 . ' czwartek, 2 czerwca 2016 06:06:15';
var_dump((new A)->getTime(1464847575));
echo 'Wynik dla timestamp = ' . 1518614715 . ' środa, 14 lutego 2018 13:25:15';
var_dump((new A)->getTime(1518614715));
echo '</pre>';