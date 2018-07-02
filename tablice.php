<?php

$camp = array();

$camp[1] = "Gabriela";
$camp['1'] = "Woronowska";
$camp[1.99] = "Szczecin";
$camp[true] = "Gniewko";

$camp[5] = 'Kot ma Alę';
$camp[6] = "Ala też zawsze ma 'jakieś ale'";

for($i=1;$i<=5;$i++)
{
  $camp[] = $i;
}

echo var_dump($camp);

?>