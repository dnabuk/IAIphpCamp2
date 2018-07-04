<?php

error_reporting(E_ALL);

if (!isset($value)) {
    trigger_error('Error 3 !!!', E_USER_NOTICE );
}

var_Dump($value['a']['b']);
