<?php


$products=array(
    array('id'=>3,'nazwa'=>"towar1",'cena'=>2),
    array('id'=>4,'nazwa'=>"towar2",'cena'=>6),
    array('id'=>6,'nazwa'=>"towar3",'cena'=>25),
    array('id'=>7,'nazwa'=>"towar4",'cena'=>22),
    array('id'=>12,'nazwa'=>"towar5",'cena'=>8)
);

echo(json_encode($products));


