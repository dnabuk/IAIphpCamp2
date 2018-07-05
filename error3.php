<?php

error_reporting(E_ERROR | E_PARSE | E_WARNING | E_USER_WARNING);

if (!isset($value)) {
    trigger_error('Brak zmiennej $value', E_USER_WARNING);
}

var_Dump($value['a']['b']);
