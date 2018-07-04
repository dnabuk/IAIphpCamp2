<?php

error_reporting( E_NOTICE | E_WARNING);

if (!isset($value, $notice, $warning)) {
    trigger_error('Brak zmiennej $value, $notice, $warning');
}

var_Dump($value['value']['notice']['warning']);
