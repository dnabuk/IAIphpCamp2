<?php
$tab1=range(0, 19, 1);
$tab2=range('A', 'T', 1);
$dziwnaTablica = [$tab1, $tab2];
echo '<table>';
$i=0;
foreach ($dziwnaTablica[0] as $valX){
	echo '<tr>';
	foreach ($dziwnaTablica[1] as $valY){
		if ($i%2==0){
			echo '<td bgcolor=brown>'.$valX.$valY.'</td>';
		} else {
			echo '<td bgcolor=yellow>'.$valX.$valY.'</td>';
		}
		$i++;
	}
	$i++;
	echo '</tr>';
}