<?php
$tab1=range(0, 19, 1);
$tab2=range('A', 'T', 1);
$dziwnaTablica = [$tab1, $tab2];
echo '<table>';

foreach ($dziwnaTablica[0] as $valX){
	echo '<tr>';
	foreach ($dziwnaTablica[1] as $valY){
		echo '<td>'.$valX.$valY.'</td>';
		
	}
	echo '</tr>';
}