<script type="text/javascript">
	function remove(id)
	{
		console.log("id");
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function()
		{
		  if (this.readyState === 4 && this.status === 200)
		  {
			document.getElementById("demo").innerHTML = this.responseText; //response - w odpowiedzi
		  }
		};
		
		xhttp.open("GET", "http://localhost/phpCamp2018/dz4/ajax/ajax.php?action=delete&id=" + id, true);
		xhttp.send();
	}
</script>

<?php
if (isset($_GET['action']) && $_GET['action']=='delete')
{
	$id = $_GET['id'];

	if ($link = mysqli_connect ("127.0.0.1", "root", ""))
	{	
		if (mysqli_select_db($link, "phpcamp_bpiotrowska"))
		{	
			$query = "DELETE FROM products WHERE id=$id";
			$resultHandle = mysqli_query($link, $query);
			//$data = mysqli_fetch_assoc($resultHandle);
			
			//echo '<a href = "http://localhost/phpCamp2018/dz4/ajax/remove.php"';
			
			
			$link->close();
			
		}
}
}
if ($link = mysqli_connect ("127.0.0.1", "root", ""))
	{
		//var_dump($link);
		
		if (mysqli_select_db($link, "phpcamp_bpiotrowska"))
		{	
			$query = "SELECT id, nazwa, cena FROM products";
			$resultHandle = mysqli_query($link, $query);
				
			echo '<div id="demo">
					<table border = "1" cellpadding = "3" cellspacing = "0">';
				echo "<tr>
					<td>Id</td><td>Nazwa</td><td>Cena</td><td>Operacje</td>
				<tr/>";
				while ($data = mysqli_fetch_assoc($resultHandle))
				{
					echo '<tr>
						<td>'.$data["id"].'</td><td>'.$data["nazwa"].'</td><td>'.$data["cena"].'</td><td><button type="button" id="klik" onclick = "remove('.$data["id"].')">usuń</button></td>
					<tr/>';
				}
				echo "</table>;
			</div>";
			
			
			$link->close();
			exit();
		}
	}
	
	echo "error";

?>