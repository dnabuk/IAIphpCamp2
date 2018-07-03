<?php
function validatePL($plcode) 
{ 
  if(preg_match("/^([0-9]{2})(-[0-9]{3})?$/i",$plcode)) 
    return true; 
  else 
    return false; 
} 

$imie = $_POST['name']; 
$nazwisko = $_POST['surname']; 
$plec = $_POST['gender']; 
$data_urodzenia = $_POST['date_of_birth']; 
$ulica = $_POST['street'];
$miasto = $_POST['city'];
$kod_pocztowy = $_POST['postcode'];

if(strlen($imie)<20 && strlen($imie)>2){
	if(strlen($nazwisko)<20 && strlen($nazwisko)>2){
		if(strlen($data_urodzenia)==10  && $data_urodzenia < date('Y-m-d') && $data_urodzenia > '1900-01-01'){	
			if(strlen($ulica)<50 && strlen($ulica)>3){
				if(strlen($miasto)<50 && strlen($miasto)>3){
					if(validatePL($kod_pocztowy)){
							$mysqli = new mysqli('localhost', 'root','' ,'phpcamp_kkucinska');
							if ($mysqli->connect_error) {
						    // w przypadku błędu (od wersji PHP 5.3), wyświetli się odpowiedni komunikat
						    die('Connect Error ('.$mysqli->connect_errno.') '. $mysqli->connect_error);
						    // w przypadku błędu (do wersji PHP 5.3), wyświetli się odpowiedni komunikat
						    if (mysqli_connect_error()) {
						       die('Connect Error (' . mysqli_connect_errno() . ') '
						       . mysqli_connect_error());
						    }
							}

							$ins = mysqli_query($mysqli,"INSERT INTO `clients` (`id`, `name`, `surname`, `gender`, `date_of_birth`, `orders_count`, `street`, `city`, `postcode`, `country`, `notes`) VALUES (NULL, '$imie', '$nazwisko', '$plec', '$data_urodzenia', '10', '$ulica', '$miasto', '$kod_pocztowy', '1', '');");
							if($ins) echo "Rekord został dodany poprawnie"; 
    						else echo "Błąd nie udało się dodać nowego rekordu"; 
     
    						mysqli_close($mysqli); 	
					}else{
						echo 'Błędne kod pocztowy';
					}	
				}else{
					echo 'Błędne miasto';
				}	
			}else{
				echo 'Błędna ulica';
			}
		}else{
	echo 'Błędna data urodzenia';
}	
	}else{
	echo 'Błędne nazwisko';
}	
}else{
	echo 'Błędne imie';
}


