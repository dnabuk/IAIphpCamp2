<?php

	require_once "connect.php";

	$link = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($link->connect_errno!=0)
	{
		echo "Error: ".$link->connect_errno;
	}
	else
	{
		if ($rezultat = @$link->query("SELECT * FROM clients WHERE gender='male'"))
		{
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
				echo '<table border="1" cellpadding="15" cellspacing="0">';
				while($wiersz = $rezultat->fetch_assoc())
				{
					echo '<tr><td>';
					echo $wiersz['name'];
					echo '</td><td>';
					echo $wiersz['surname'];
					echo '</td><tr>';
				}
				$rezultat->free_result();
				echo '</table>';
				
			} 
			else 
			{
				$_SESSION['blad'] = '<span style="color:red">brak wynikow</span>';
			}
			
		}
		
		$link->close();
	}

?>