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
				while($wiersz = $rezultat->fetch_assoc())
				{
					echo $wiersz['name']."        ";
					echo $wiersz['surname']."</br>";
				}
				$rezultat->free_result();
				
			} 
			else 
			{
				$_SESSION['blad'] = '<span style="color:red">brak wynikow</span>';
			}
			
		}
		
		$link->close();
	}

?>