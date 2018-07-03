
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css" type="text/css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="like.js"></script>

    <title>Rejestracja</title>
</head>

<br>
<div class="container">
<h3>Zarejestruj się</h3>

    <form action="dane.php" method="post", name= 'form1', class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Imię:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="login" placeholder="Wpisz imię" name="name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="surname">Nazwisko:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="surname" placeholder="Wpisz nazwisko" name="surname">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="gender">Płeć:</label>
            <div class="col-sm-10">
                <select name='gender'>
                    <option value="unknown" selected>unknown</option>
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select></br>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="date_of_birth">Data urodzenia:</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="date_of_birth"  name="date_of_birth">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="street">Ulica:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="street" placeholder="Wpisz ulicę" name="street">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="city">Miasto:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="city" placeholder="Wpisz miasto" name="city">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="postcode">Kod pocztowy:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="postcode" placeholder="Wpisz kod pocztowy" name="postcode">
            </div>
        </div>
    <input type="submit" value="Zarejestruj" class="btn btn-default" >
</form>
</div>
</br>

<?php

if (!empty($_POST)) {
    $link = mysqli_connect("localhost", "dagmara", "", 'phpcamp_dtega');


    $name = filtruj($_POST['name'],$link);
    $surname = filtruj($_POST['surname'], $link);
    $gender = filtruj($_POST['gender'],$link);
    $date_of_birth = filtruj($_POST['date_of_birth'],$link);
    $street = filtruj($_POST['street'],$link);
    $city = filtruj($_POST['city'],$link);
    $postcode = filtruj($_POST['postcode'],$link);
    $zapytanie = "INSERT INTO `clients` (`name`, `surname`, `gender`, `date_of_birth`, `street`, `city`, `postcode`) VALUES ('$name', '$surname','$gender','$date_of_birth','$street','$city','$postcode')";
    $wynik = mysqli_query($link, $zapytanie);


    print mysqli_insert_id($link);
    echo '</br>';
    if ($wynik) {
        echo 'Prawidłowo dodano do bazy danych';
    } else {
        echo 'Nie dodano do bazy';
    }


}

function filtruj($zmienna, $con)
{
    if(get_magic_quotes_gpc())
        $zmienna = stripslashes($zmienna); // usuwamy slashe

    // usuwamy spacje, tagi html oraz niebezpieczne znaki
    return mysqli_real_escape_string($con, htmlspecialchars(trim($zmienna)));
}
?>
</body>
</html>