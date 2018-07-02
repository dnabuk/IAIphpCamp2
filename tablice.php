<?php

$camp = array(
1 => "Beata",
'1' =>"Piotrowska",
1.99 => "Szczecin",
true => "Gniewomir"
);

var_dump ($camp);
echo "<br>";

$camp[4] = "wartosc";

var_dump ($camp);
echo "<br>";

$camp[] = "Kot ma Alę";

var_dump ($camp);
echo "<br>";

unset ($camp[4]);

var_dump ($camp);
echo "<br>";

$camp[] = 'Ala zawsze ma \'jakieś ale';

var_dump ($camp);
echo "<br>";

$array2[] = [1,2,3,4,5];
$camp[] = $array2;

var_dump ($camp);

?>