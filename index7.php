<?php
/*
 *  Zadanie polegające na wyświetleniu forma pozwalającego na edycje użytkownika
 *  o id podanym poprzez metode GET
 *  Przykład: ?id=975004
 *
 *  Form jest zabezpieczony tokenem który wygasa po 60 sekundach od załadowania strony
 *
 *
 */
session_start();
include('config.php');
if (isset($_POST['client_name']) && isset($_POST['client_surname'])) {

} else {
    $_SESSION['tok'] = password_hash(bin2hex(random_bytes(32)), PASSWORD_BCRYPT);
    $token = $_SESSION['tok'];
    $_SESSION['token_time'] = time();
}
if (isset($_GET['id'])) {
    $_SESSION['id'] = $_GET['id'];
    $id = $_GET['id'];

    $sql = 'SELECT * FROM `clients` WHERE id = ?';
    $c = GetPDO()->prepare($sql);
    $c->bindParam(1, $id);
    $c->execute();

    $result = $c->fetchAll();
    foreach ($result as $row) {} // potrzebny do załadowania elementów $row
    ?>
    <form action='index7inc.php' method='POST'>
        Imię::<input type="text" name="client_name" value="<?= $row['name'] ?>"><br>
        Nazwisko:<input type="text" name="client_surname" value="<?= $row['surname'] ?>"><br>
        Płeć:<select name="client_gender" value="<?= $row['gender'] ?>">
            <option value="male">male</option>
            <option value="female">female
            <option value="unknown">unknown</option>
        </select><br>
        Data urodzenia:<input type="date" name="client_date" value="<?= $row['date_of_birth'] ?>"><br>
        <input type="text" name="client_order" value="<?= $row['orders_count'] ?>">
        <input type="hidden" name="client_token" value="<?= $token ?>">
        <input type="hidden" name="client_send" value="true">
        <input type="submit">
    </form>
    <?php } ?>