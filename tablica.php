<?php

$camp = array(
    1 => 'Agata',
    '1' => 'Major',
    1.99 => 'Szczecin',
    True => 'Gniewomir',
    4=>'Kubus',
    5=>'Kot ma Alę',
);
unset ($camp [4]);
array_push($camp,'Ala też zawsze ma zawsze \'jakieś ale');
array_push($camp, [1,2,3,4,5]);
var_dump($camp);
?>