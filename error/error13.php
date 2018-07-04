<?php
error_reporting(E_ALL);


class A {

    public function getTime($timestamp)
    {
        return date('H:i:s',$timestamp);
    }
}


echo 'Wynik dla timestamp = ' . 1464847575 . ' czwartek, 2 czerwca 2016 06:06:15'; //2.06.2016, 08:06:15
echo '<br>';
var_dump((new A)->getTime(1464847575)); //08:06:15
echo '<br>';
echo 'Wynik dla timestamp = ' . 1518614715 . ' środa, 14 lutego 2018 13:25:15'; //14.02.2018, 14:25:15
echo '<br>';
var_dump((new A)->getTime(1518614715)); //14:02:15