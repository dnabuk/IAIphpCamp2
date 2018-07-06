<?php
$key = 'a2f90c59623f6225d7999f647492adc1';
echo $key;
if($_GET['firedir'] != 0){
$dri=$_GET['firedir'];	
}else{
$dri=$_GET['move'];
//$dri=uper($dri);
}
echo $dri;
$dist=$_GET['dist'];
$fire=$_GET['fire'];
require_once 'move_up.php';
echo move($key,$dri,$dist,$fire);
?>