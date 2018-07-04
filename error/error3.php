<?php

error_reporting(E_ALL);

if (!isset($value)) {
    trigger_error('Brak zmiennej $value');
}

var_Dump($value['a']['b']);
