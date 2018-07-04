<?php
error_reporting(0);


class A {

    public function printInfo($name, $validateName)
    {
        if ($validateName == 1) {
            if ( strpos(strtoupper($name), 'MATEUSZ') !== false ) { //nie będzie czuły na wielkość liter
                //sprawdzamy czy imie mateusz znajduje sie w przekazanej nazwie
                echo 'Witaj Mateusz!';
            } else {
                echo 'To nie Ty Mateusz!';
            }
        } else {
            echo 'czesc ' . $name ;
        }
    }
}

(new A)->printInfo($_GET['name'], $_GET['validateName']);