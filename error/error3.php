<?php

error_reporting(E_ALL);

if (!isset($value)) {
    trigger_error('Error 3 !!!', E_USER_WARNING );
}

var_Dump($value['a']['b']);
