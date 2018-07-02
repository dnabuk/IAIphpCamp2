<?php

$tablica_a = range(0,19);
$litery = range("A","T");
//var_dump($tablica_a);

    foreach ($tablica_a as $key => $td) {
        foreach ($litery as $key2 => $litera) {
            $dziel = $td%2;
            $dziel2 = $key2%2;

            if($dziel !=0 and $dziel2 !=0){
            echo "<div style='display: inline-block; background-color:yellow; width: 50px; height: 50px; border: solid 1px black;'>" . $td . "" . $litera . "</div>";

        }else{
                echo "<div style='display: inline-block; background-color:red; width: 50px; height: 50px; border: solid 1px black;'>" . $td . "" . $litera . "</div>";

            }

        }
        echo "<br>";
    }
