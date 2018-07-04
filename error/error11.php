<?php
//error_reporting(E_ALL); //na czas poprawek
error_reporting(0);


class A {

    public function printInfo($name, $age, $validateName)
    {
        if ($validateName == true && strlen($name) == 0) {
            var_Dump('zle dane');
            die;
        }
        echo 'czesc ' . $name . ', twój wiek to: ' . $age;
    }
}



if ((isset($_GET['validateName'])) && ($_GET['validateName'] == 1)) {
    //sprawdzamy czy przeslany jest parametr odpowiadajacy za walidacje nazwy
    $validateName = true;
}
else {
	echo 'Złe dane, użyj ?age=WIEK&name=IMIĘ&validateName=1';
	die;
}
if (isset($_GET['age'])){
	$age = (int)$_GET['age'];
}
if (isset($_GET['name'])){
	(new A)->printInfo($_GET['name'], $validateName, $age);
}