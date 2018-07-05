<?php

error_reporting(E_ALL);
$value = '';
if (!isset($value)) {
    trigger_error('Brak zmiennej $value',E_USER_WARNING);
}
if(isset($value['a']['b'])){
    var_Dump($value['a']['b']);
}

