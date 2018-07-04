<?php
require_once "config.php";
$uid = (int) $_GET['uid'];

function XSSdisabled($bindthis)
{
    $bindthis = htmlspecialchars(addslashes($bindthis));
    return $bindthis;
}

$query = "SELECT name, surname,city,date_of_birth,postcode,street,gender FROM clients where id = '".$uid."'";
$result = mysqli_query($mysqli, $query);
$row = mysqli_fetch_assoc($result);
if(isset($_POST['save'])) {
    $stmt = $mysqli->prepare("UPDATE clients SET date_of_birth =?, name=?, surname=?, street=?, gender=?, city=?, postcode=? where id = ?");
    $stmt->bind_param("sssssssi", XSSdisabled($_POST['date_of_birth']), XSSdisabled($_POST['name']), XSSdisabled($_POST['surname']), XSSdisabled($_POST['street']), XSSdisabled($_POST['gender']), XSSdisabled($_POST['city']), XSSdisabled($_POST['postcode']), $uid);
    $stmt->execute();
    if($stmt->execute()){

        echo "<div  style='
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
    color: #3c763d;
    font-family: Verdana,sans-serif;
    background-color: #dff0d8;
    border-color: #d6e9c6;
    box-sizing:inherit;
    '>
  <strong>Zaktualizowano!</strong><br>Aby powrócic do listy klientów kliknij <a href='lista_userow.php'>tutaj</a>
</div>
";

    }

    $stmt->close();
}
?>


<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>PA IAI - edycja klienta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<form action="formularz_edycja.php?uid=<?=$uid;?>" method="post">

    <form class="form-horizontal">
        <fieldset>


            <legend>Edytuj klienta</legend>


            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Imie</label>
                <div class="col-md-4">
                    <input id="name" name="name" type="text" value="<?=$row['name']?>" placeholder="Podaj imie" class="form-control input-md">

                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="surname">Nazwisko</label>
                <div class="col-md-4">
                    <input id="surname" name="surname" type="text" value="<?=$row['surname']?>" placeholder="Podaj Nazwisko" class="form-control input-md">

                </div>
            </div>




            <div class="form-group">
                <label class="col-md-4 control-label" for="street">Ulica</label>
                <div class="col-md-4">
                    <input id="street" name="street" type="text" placeholder="Podaj ulice" class="form-control input-md">

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="date_of_birth">Data urodzenia</label>
                <div class="col-md-4">
                    <input  name="date_of_birth" value="<?=$row['date_of_birth']?>" class="form-control" id="date_of_birth"  class="form-control input-md">

                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="gender">Płeć</label>
                <div class="col-md-4">
                    <select id="gender" name="gender" value="<?=$row['gender']?>" class="form-control">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="unknow">Unknow</option>
                    </select>
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="city" >Miasto</label>
                <div class="col-md-4">
                    <input id="city" name="city" type="text" value="<?=$row['city']?>" placeholder="Podaj miasto" class="form-control input-md">

                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="postcode">Kod pocztowy</label>
                <div class="col-md-4">
                    <input id="postcode" name="postcode" type="text" value="<?=$row['postcode']?>"" placeholder="Podaj kod pocztowy" class="form-control input-md">

                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton">Zapisz zmiany</label>
                <div class="col-md-4">
                    <button id="singlebutton"  name="save" class="btn btn-primary">Zapisz</button>
                </div>
            </div>
        </fieldset>
    </form>

</form>
</body>
</html>
<?
$query = "SELECT name, surname,city,date_of_birth,postcode,street,gender FROM clients where id = '".$uid."'";
$result = mysqli_query($mysqli, $query);
$row = mysqli_fetch_assoc($result);
echo stripslashes($row['name']);
echo $row['surname'];
?>