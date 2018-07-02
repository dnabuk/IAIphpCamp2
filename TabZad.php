<?php
$tabLetter = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T');
$tab[20][20] = array();
for ($i = 0; $i < 20; $i++){
    foreach ($tabLetter as $value){
        echo $i . $value;
        if ($i == 20){
            echo '<br>';
        }
    }


    for ($j = 0; $j <= 20; $j++){
        foreach ($tabLetter as $value) {
            echo $j . $value;
            if ($j == 20){
                echo '<br>';
            }
        }


    }
}
//getcolor=1, getname=michal, gethard