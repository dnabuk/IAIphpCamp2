<?php

$litery = range('A','T');

foreach($litery as $j)
{
	for($i=0; $i<20; $i++)
	{
		if($i % 2 == 0)
			$color = 'yellow';
		else
			$color = 'red';
		echo "<div style='display: inline-block;
		background-color: ".$color.";
		width: 50px;
		height: 50px;
		border: solid 1px black;'>". $i . $j."</div>";
		if($i == 19)
			echo "<br>";
		
			
	}	
}
?>