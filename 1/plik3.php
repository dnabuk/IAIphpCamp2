<?php


$camp1 = array(
  1 => "Patrycjusz",
  '1' => "Nowaczyk",
  1.99 => "Poznań",
  1 => 'Gniewko',
  4 => "Random value",
);
var_dump($camp1);
echo "</br></br>";

$camp2 = array(
  1 => "Patrycjusz",
  '1' => "Nowaczyk",
  1.99 => "Poznań",
  1 => 'Gniewko',
  4 => "Random value",
  5 => "Kot ma Alę"
);
var_dump($camp2);

unset($camp2[4]);
echo "</br>";
var_dump($camp2);

echo "</br></br>";
echo "</br></br>";

$camp3 = array(
  1 => "Patrycjusz",
  '1' => "Nowaczyk",
  1.99 => "Poznań",
  1 => 'Gniewko',
  4 => "Random value",
);
var_dump($camp3);
echo "</br></br>";

$camp4 = array(
  1 => "Patrycjusz",
  '1' => "Nowaczyk",
  1.99 => "Poznań",
  1 => 'Gniewko',
  4 => "Random value",
  5 => "Kot ma Alę"
);
var_dump($camp4);

 ?>
