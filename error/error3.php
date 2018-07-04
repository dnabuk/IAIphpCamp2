<?php

error_reporting(E_ALL);

if (!isset($value)) {
    trigger_error('Zmienna $value nie jest zdefiniowana');
}

var_Dump($value['a']['b']);
