<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);

function foo()// usunięty argument($a) - nie był wykorzystywany
{
	echo 'foo';
}

//poprawiona nazwa zmiennej
foo();

if (isset($value)) var_Dump($value['a']['b']); //element tablicy o kluczu a, b jest pusty

foo();
