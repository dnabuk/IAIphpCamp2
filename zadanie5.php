<?php
$mX=19;
$mY='T';

if (isset($_GET['X'])){
	$mX=$_GET['X'];
}
if (isset($_GET['Y'])){
	$mY=$_GET['Y'];
}
$tab1=range(0, $mX, 1);
$tab2=range('A', $mY, 1);
$dziwnaTablica = [$tab1, $tab2];
echo '<table>';


$rX = count($dziwnaTablica[0]);
$rY = count($dziwnaTablica[1]);

$j=0;
foreach ($dziwnaTablica[0] as $valX){
	echo '<tr>';
	$i=0;
	foreach ($dziwnaTablica[1] as $valY){
		
		if (($i-$j>=$rX/2)||
		   (($i+$j-$rX/2)+1<=0)||
		   (($i-$j)+$rX/2<=0)||
		   (($i+$j-$rX+1)>=$rX/2)){
			echo '<td bgcolor=yellow>'.$valX.$valY.'</td>';
		} else {
			echo '<td bgcolor=brown>'.$valX.$valY.'</td>';
		}
		$i++;
	}
	$j++;
	echo '</tr>';
}