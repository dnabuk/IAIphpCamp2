<?php

error_reporting(E_ALL);
$value['a']['b']=1;
if (!isset($value)) {
    trigger_error('Brak zmiennej $value', E_USER_WARNING);
}

var_dump($value['a']['b']);
