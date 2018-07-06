<!DOCTYPE html>
<html>
<head>

<style>
button{
color: navy;
border: 3px solid;
font-size: 20px;
margin:5px;
padding: 15px 32px;
}
h1{
 background-color: blue;
}
body{
 background-color: lightblue;
}
</style>
</head>
<body>
<?php
include_once 'join-current.php';
include_once 'get-board.php'; 
    

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
				/*
				$color = "";
				if($type == "empty")
					$color = "white";
				else if($type == "player")
				{
					if($name == $ourName)
					{
						$color = "green";
					}
					else
						$color = "red";
				}
				else if($type == "bullet")
				{
					$color = "black";
				}
				else if($type == "obstacle")
				{
					$color = "orange";
				}
				*/
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
        ?>
<center>
<h1>chodzenie</h1>
<br/><br/><br/>
<button type="button" onclick="myFunction('N', 1, false)"> up </button>
<br/>
<button type="button" onclick="myFunction('W', 1, false)" > left </button>

<button type="button" onclick="myFunction('E', 1, false)" style="margin-left:35px"> right </button>
<br/>
<button type="button" onclick="myFunction('S', 1, false)"> down </button>
<button type="button" onclick="myFunction('S', 1, true)"> shoot </button>
</center>
<script>
function myFunction(move, shoot, dist) {
var key = document.getElementById('klucz').innerHTML;
 xhttp = new XMLHttpRequest();
 xhttp.open("POST", "www.tank.iai.ninja/api/make-move.php");
 
 var x = {
 'key' : key,
 'move' : move,
 'shoot' : shoot,
 'dist' : dist,
 };
 xhttp.send(x);
}


</script>
</body>
</html>
