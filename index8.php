<?php
/*
 * Zadanie z klas: operacje na produkcie - dzień 3
 *
 *
 */
require_once('klasy/products.inc.php');
require_once('klasy/virtualproducts.inc.php');

$product = new Products;
$vp = new VirtualProducts;

if(isset($vp->a)){
    echo 'Wartość jest zasetowna';
}else{
    echo 'Nie jest ustawiona wartość';
}

$vp->a = null;
unset($vp->a);

try{
    $vp ->test();
}catch(Exception $e){
    echo '<b>'.$e.'</b>';
}

?><br><?php
try {
    $vp->a = 1;

} catch (Exception $e) {
    echo '<b>'.$e.'</b>';
}
?><br><?php
try{
    echo $vp->b;
}catch(Exception $e){
    echo '<b>'.$e.'</b>';
}

