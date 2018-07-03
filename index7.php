<?php
include('config.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];


    $sql = 'SELECT * FROM `clients` WHERE id = ?';
    $c = GetPDO()->prepare($sql);
    $c->bindParam(1,$id);
    $c->execute();

    $result = $c->fetchAll();
    foreach($result as $row){

    }
    ?>
    <form action='index7.php' method='POST'> <!-- odwoluje sie do samego siebie -->
        Imię::<input type="text" name="client_name" value="<?=$row['name']?>"><br>
        Nazwisko:<input type="text" name="client_surname" value="<?=$row['surname']?>"><br>
        Płeć:<select name="client_gender" value="<?=$row['gender']?>">
            <option value="male">male</option>
            <option value="female">female
            <option value="unknown">unknown</option>
        </select><br>
        Data urodzenia:<input type="date" name="client_date" value="<?=$row['date_of_birth']?>"><br>
        <input type="text" name="client_order" value="<?=$row['orders_count']?>">
        <input type="submit">
    </form>
    <?php
}

if (isset($_POST['client_name']) && isset($_POST['client_surname'])) {
    $clientname = $_POST['client_name'];
    $clientsurname = $_POST['client_surname'];
    $clientgender = $_POST['client_gender'];
    $clientbirth = $_POST['client_date'];
    $clientorder = $_POST['client_order'];
    echo $clientname.'<br>';
    echo $clientsurname.'<br>';
    echo $clientgender.'<br>';
    echo $clientbirth.'<br>';
    echo $clientorder.'<br>';
    //$clientd
    /*
     $clientname = mysqli_real_escape_string($_POST['client_name']);
    $clientsurname = mysqli_real_escape_string($_POST['client_surname']);
    $clientgender = mysqli_real_escape_string($_POST['client_gender']);
    $clientbirth = mysqli_real_escape_string($_POST['client_date']);
     */
    $pdo = GetPDO();
    $sql = 'INSERT INTO `clients`(`name`, `surname`, `gender`, `date_of_birth`, `orders_count`, `street`, `city`, `postcode`, `country`, `notes`) VALUES (?,?,?,?,?,?,?,?,?,?) WHERE `id` = ?';
    $c = GetPDO()->prepare($sql);
    $c->bindParam(1, $clientname);
    $c->bindParam(2, $clientsurname);
    $c->bindParam(3, $clientgender);
    $c->bindParam(4, $clientbirth); //datetime w bazie przeszkadza ale przechodzi
    $c->bindParam(5, $clientorder);
    $c->bindParam(6, $clientorder); //podaje takie wartości bo nie ma sensu robienia dalej inputów, dane wysyłają się
    $c->bindParam(7, $clientorder);
    $c->bindParam(8, $clientorder);
    $c->bindParam(9, $clientorder);
    $c->bindParam(10, $clientorder);
    $c->bindParam(11, $id);
    $c->execute();
    /*$result = $c->fetchAll();
    echo 'dd';
    foreach ($result as $row) {
        echo $clientname;
        echo 'wszystko dobrze';
    }*/

} else {
    echo 'wpisz imie!';
}