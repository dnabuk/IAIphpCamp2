<?php

error_reporting(E_ALL);
error_reporting(E_WARNING);
error_reporting(E_PARSE);

function foo()
{
	echo 'foo';
}
foo();
$value['a']['b']=1;
var_dump($value['a']['b']);

foo();