<?php
$tab1=range(0, 19, 1);
$tab2=range('A', 'T', 1);
$dziwnaTablica = [$tab1, $tab2];
echo '<table>';

$j=0;
foreach ($dziwnaTablica[0] as $valX){
	echo '<tr>';
	$i=0;
	foreach ($dziwnaTablica[1] as $valY){
		
		if ($i+$j<count($dziwnaTablica[0])/2){
			echo '<td bgcolor=brown>'.$valX.$valY.'</td>';
		} else {
			echo '<td bgcolor=yellow>'.$valX.$valY.'</td>';
		}
		$i++;
	}
	$j++;
	echo '</tr>';
}