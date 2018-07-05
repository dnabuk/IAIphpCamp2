<?php

	$connect = new mysqli("localhost", "root", "", "phpcamp_gworonowska");

	if($connect->connect_errno != 0){ 
	    echo"Error: ".$connect->connect_errno ;
	}
	 
	else{
	    
	    $limit = 100;

	    $sql = "SELECT `id` FROM `clients`";
		$result = $connect->query($sql);
		$numrows = $result->num_rows;

	 		
		echo "Strona: ";
		echo "<table>";
		echo "<tr><td>" . 'ID' . "</td></tr>";
		
		for($i = 0; $i < ceil($numrows/$limit);$i++) {
			echo '<a href="SQL3.php?num='.($i*$limit).'">'.($i+1).'</a> ';

			
		}

	 	echo "</table>";

		$connect->close();

		}       


	?>