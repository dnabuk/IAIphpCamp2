<?php

$litery = range('A','T');

for($i=0; $i<20; $i++)
{
	$k = 0;
	foreach($litery as $j)
	{
		if($i % 2 == 0)
		{
			if($k % 2 == 0)
				$color = 'yellow';
			else
				$color = 'red';
		}
		else
		{
			if($k % 2 != 0)
				$color = 'yellow';
			else
				$color = 'red';
		}
		
		echo "<div style='display: inline-block;
		background-color: ".$color.";
		width: 50px;
		height: 50px;
		border: solid 1px black;'>". $i . $j."</div>";
		if($j == 'T')
			echo "<br>";
		
		$k++;
	}	
}
?>