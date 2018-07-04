<?php

error_reporting(0);

function foo($a = '')
{
	echo 'foo';
}
foo();
$value = null;
var_Dump($value['a']['b']);

foo();
