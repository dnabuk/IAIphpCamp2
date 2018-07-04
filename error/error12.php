<?php
error_reporting(0);


class A {

    public function printInfo($name, $validateName)
    {
        if ($validateName == 1) {
            if (strpos($_GET['name'], 'Mateusz') === 0) {
                //sprawdzamy czy imie mateusz znajduje sie w przekazanej nazwie
                echo 'Witaj Mateusz!';
            } else if(strpos($_GET['name'], 'Mateusz') === false){
                echo 'To nie Ty Mateusz!';
            }
        } else {
            echo 'czesc ' . $name ;
        }
    }
}
var_dump(strpos($_GET['name'], 'Mateusz'));
(new A)->printInfo($_GET['name'], $_GET['validateName']);