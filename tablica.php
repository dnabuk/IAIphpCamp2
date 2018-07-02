<?php
    $camp[1] = "Daniel";
    $camp["1"] ="Molenda";
    $camp[1.99] = "Szczecin";
    $camp[true] = "Gniewomir";
    $camp[4] = "Ala ma kota";
    $camp[]="Kot ma Alę";
    $camp[]='Ala też zawsze ma zawsze \'jakieś ale\'';
    $camp[] = [1,2,3,4,5];

    unset($camp[5]);

    echo $camp[1];
?>