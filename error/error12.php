<?php
error_reporting(0);

class A {

    public function printInfo($name, $validateName)
    {
        //var_dump (strpos('Mateusz',$name));
        if ($validateName == true) {
            if (strpos($name,'Mateusz')!== false) {
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



echo $_GET['validatename'];
(new A)->printInfo($_GET['name'], $_GET['validatename']);