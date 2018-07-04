<?php

error_reporting(1);

function foo()
{
	echo 'foo';
}
foo();

if (isset($value['a']['b'])) {
	var_dump($value['a']['b']);
}

foo();
