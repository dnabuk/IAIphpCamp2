<?php
	include("connect.php");
	?>
    <form name="form" method="post">
    imię: <input type="text" name="client_name" /><br/>
    nazwisko: <input type="text" name="client_surname" /><br/>
    płeć: <select name="gender">
    	  	<option value="male">male</option>
            <option value="female">female</option>
            <option value="unknown">unknown</option>
          </select><br/>
    
    <input type="submit" name="go" value="Wyślij"/>
    </form>
    <?php
	if(isset($_POST['go'])){
		$imie=$_POST["client_name"];
		$naz=$_POST["client_surname"];
		$plec=$_POST["gender"];
		$zap="insert into clients(name,surname,gender)
				   values('$imie','$naz','$plec');";
		if(mysqli_query($link,$zap)){echo "wykonano";}else{echo "nie wykonano";};		   
				   }
				   
	$zap="select* from clients where id=1";
	$wynik=mysqli_query($link, $zap);
	while($k=mysqli_fetch_row($wynik)){
		echo $k[1];}
		
?>