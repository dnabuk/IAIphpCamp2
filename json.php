<?php 
$tab=array('zakupy'=>array('boczek','jajka','cebula'));
print_r($tab);
echo '<br/>';
$tabjson=json_encode($tab);
print_r($tabjson);
?>