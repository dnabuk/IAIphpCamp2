<?php
$letter=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T');
echo '<table>';
for($x=0;$x<20;$x++){
	
	for($y=0;$y<20;$y++){
	$tablica[$x][$y]=$x.$letter[$y];


}}
$c=0;
for($x=0;$x<20;$x++){
	echo '<tr>';
	for($y=0;$y<20;$y++){
		echo '<td ';
		$c=$c-1;
		$color=10-$x;	
		if($c<$color && $c>$color){	
						echo 'bgcolor="yellow"';
		}else{

			echo 'bgcolor="Brown"';
		}
				
		echo '>';
	echo $tablica[$x][$y];
echo '</td>';

}
echo '</tr>';
}
echo '</table>';
//var_dump($tablica);