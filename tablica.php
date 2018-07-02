<?php
/**
 * Created by PhpStorm.
 * User: lukasz
 * Date: 02.07.2018
 * Time: 15:22
 */
$camp = array( (int) 1=>"Łukasz",
    (string) '1'=>"Krawczyk",
    (float) 1.99 =>"Gliwice",
    (boolean) 1 =>"Gniewomir",
    (int) 4 =>"abc"

);
var_dump($camp);
$camp[] = 'kot ma ale';
var_dump($camp);
unset($camp[5]);
var_dump($camp);
$camp[] ='Ala tez ma zawsze jakies ale';
var_dump($camp);
$camp[] = array(range(1,5);

var_dump($camp);

