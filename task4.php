<style>
table{
	border-collapse: collapse;
}
td{
	width: 50px; height: 50px; border: solid 1px #000; vertical-align: top;
	background: yellow;
}
/*tr:nth-child(2n) td:nth-child(2n+1), tr:nth-child(2n+1) td:nth-child(2n) {
	background: brown;
}*/
.brown{
	background: brown;
}
</style>
<?php



function gen_data($sizeX=20, $sizeY=20){
	$arr = array();
	$startA = ord('A');
	for($i=0; $i<$sizeY; $i++){
		$arr[$i] = array();
		for($j=0; $j<$sizeX; $j++){
			$arr[$i][$j] = $i.chr($startA+$j);
		}
	}
	return $arr;
}
function create_table($data){
	$buf = '<table border="1"><tbody>';
	for($i=0, $leni=sizeof($data); $i<$leni; $i++){
		$buf.='<tr>';
		for($j=0, $lenj=sizeof($data[$i]); $j<$lenj; $j++){
			
			$buf.='<td'.(($i == $j || $leni-$j-1 == $i)? ' class="brown"':'').'>'.$data[$i][$j].'</td>';
		}
		$buf.='</tr>';
	}
	return $buf.'</table>';
}
echo create_table(gen_data(20,20));

?>