<table>
<?php
$abecadlo=['A', 'B','C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T'];

for($i=0; $i<20; $i++){
	?><tr><?php
	for($j=0; $j<20; $j++){
		$a[$i][$j]= $i.$abecadlo[$j];
		?><th style="border-style: solid; border-width: 5px; width: 20px;"><?php
		echo $a[$i][$j];?></th><?php
	}
	?></tr><?php
}
?>
</table>
<?php