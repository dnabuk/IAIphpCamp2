<?php
$products = array(
    array('id'=>3,'nazwa'=>'kubek','cena'=>9),
    array('id'=>2,'nazwa'=>'lyzka','cena'=>78),
    array('id'=>3,'nazwa'=>'miska','cena'=>89),
    array('id'=>4,'nazwa'=>'talerz','cena'=>56),
    array('id'=>5,'nazwa'=>'noz','cena'=>99)
);

echo json_encode($products);

