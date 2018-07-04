<?php
error_reporting(0);


class A {

    public function printInfo($name, $age, $validateName)
    {
        if ($validateName !== false || strlen($name) == 0) {
            var_Dump('zle dane');
            die;
        }
        echo 'czesc ' . $name . ', twój wiek to: ' . $age;
    }
}

$validateName = false;

if ($_GET['validateName'] === 1) {
    //sprawdzamy czy przeslany jest parametr odpowiadajacy za walidacje nazwy
    $validateName = true;
}
$age = (int)$_GET['age'];
(new A)->printInfo($_GET['name'], $age, $validateName);