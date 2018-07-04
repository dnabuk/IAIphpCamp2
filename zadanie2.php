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
    Data urodzin:<input type="date" name="date"/><br/>
    Adres:<input type="text" name="adress" /><br/>
    Miasto:<input type="text" name="city" /><br/>
    kod pocztowy:<input type="text" name="code" /><br/>
    Państwo: <input type="text" name="country" /><br/>
    Notatka: <textarea name="notes"></textarea><br/>
    <input type="submit" name="go" value="Wyślij"/>
    </form>
    <?php
	if(isset($_POST['go'])){
		$imie=$_POST["client_name"];
		$naz=$_POST["client_surname"];
		$plec=$_POST["gender"];
		$data=$_POST["date"];
		$adres=$_POST["adress"];
		$miast=$_POST["city"];
		$kod=$_POST["code"];
		$panst=$_POST["country"];
		$notatka=$_POST["notes"];
		if($panst=="")$panst=1;
		$zap="insert into clients(name,surname,gender,date_of_birth,orders_count,street,city,postcode,country,notes)
				   values('$imie','$naz','$plec','$data','1234','$adres','$miast','$kod','$panst','$notatka');";
		if(mysqli_query($link,$zap)){echo "wykonano";}else{echo "nie wykonano";};		   
				   }
?>