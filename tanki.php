
<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "www.tank.iai.ninja/api/get-current-board.php");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$result =json_decode($result,true);
$board = $result['board'];

require_once('tanks.css');

$render = array();
foreach ($board as $key => $value) {
    $pos = str_split($value['position']);
    $index = 0;
    $axis_x = 0;
    $axis_y = 0;
    foreach ($pos as $y => $letter) {
        if (ord($letter) > ord('Z') | ord($letter) < ord('A')) {
            break;
        } else {

            $index ++;
        }
        
    }
	$rev = (array_chunk($pos, $index)['0']);
	$ind = $index;
	foreach($rev as $val){
		


        $axis_x += ((ord($val) + 1 - ord('A')) * pow(26, $ind-1));
		

		
		$ind--;
    }

	
    while (isset($pos[$index])) {
        $axis_y .= $pos[$index];
        $index ++;
    }
	$axis_y = (int)$axis_y;
    $render[$axis_y][$axis_x] = $value;
	
}
ksort($render);
foreach($render as & $member){
ksort($member);
}

//var_dump($render);




echo "<HTML><HEAD>";
echo "<link rel='stylesheet' type='text/css' href='tanks.css'></HEAD>";


	echo "<div style='object-fit:cover;'>";
	foreach($render as $key=>$col)
	{

		
			foreach($col as $row=>$value)
			{
				$color = "white";
				
				$myfile = fopen('nick.txt', 'r');
				
				$name = $value['type'];
					if(isset($value['name']) && $value['name']==fread($myfile,filesize("nick.txt"))){
						if($name == 'player_base'){
						
						$name = 'ourBase';}
						else{
						$name = 'ourPlayer';}
					}
				fclose($myfile);
				
					echo '<div id="'.$value['position'].'" class="'.$name."\" style='display: inline-block;
						
					text-align: center;
					width: 50px;
					height: 30px;
					padding-top: 20px;
					border: solid 1px black; align:left;'><P>".$value['position']."</P></div>";

				
				
				
			}
			echo "<br>";

	}
	echo'</div></HTML>';

