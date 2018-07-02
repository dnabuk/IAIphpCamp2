<?php
//$a= array[20][20];
$abecadlo=['A', 'B','C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T'];

for($i=0; $i<20; $i++){
	for($j=0; $j<20; $j++){
		$a[$i][$j]= $i.$abecadlo[$j];
		echo $a[$i][$j];
		echo ' ';
	}
	echo '<br>';
}
