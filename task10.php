<table>
<?php
$abecadlo=['A', 'B','C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T'];

for($i=0; $i<20; $i++){
	?><tr><?php
	for($j=0; $j<20; $j++){
		$a[$i][$j]= $i.$abecadlo[$j];
		if($i%2==0 && $j%2==0 || $i%2==1 && $j%2==1){
			?><th style="background-color: yellow; border-style: solid; border-width: 1px; width: 20px;"><?php
		}elseif($i%2==1 && $j%2==0 || $i%2==0 && $j%2==1){
			?><th style="background-color: brown; border-style: solid; border-width: 1px; width: 20px;"><?php
		}
		echo $a[$i][$j];?></th><?php
	}
	?></tr><?php
}
?>
</table>
<?php