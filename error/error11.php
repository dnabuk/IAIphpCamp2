<?php
error_reporting(0);


class A {

    public function printInfo($name, $validateName, $age)
    {
        if ($validateName == false || strlen($name) == 0) {
            var_Dump('zle dane');
            die;
        }
        echo 'czesc ' . $name . ', twój wiek to: ' . $age;
    }
}



if (1 == $_GET['validateName']) {
    //sprawdzamy czy przeslany jest parametr odpowiadajacy za walidacje nazwy
    $validateName = true;
}
$age = (int)$_GET['age'];
(new A)->printInfo($_GET['name'], $validateName, $age);