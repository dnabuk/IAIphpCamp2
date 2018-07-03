<?php
include('config.php');
session_start();

if (isset($_POST['client_send'])) {
    $clientname = $_POST['client_name'];
    $clientsurname = $_POST['client_surname'];
    $clientgender = $_POST['client_gender'];
    $clientbirth = $_POST['client_date'];
    $clientorder = $_POST['client_order'];
    if (!hash_equals($_SESSION['tok'], $_POST['client_token'])) {
        echo 'Zly token!';
        exit;
    }
    if (time() - $_SESSION['token_time'] > 60) {
        echo 'token uplynal';
        exit;
    } else {
        $id = $_SESSION['id'];
        $sql = "UPDATE clients SET name = ? , surname = ? , gender = ? , date_of_birth = ? , orders_count = ? WHERE id = ?";
        $cd = GetPDO()->prepare($sql);
        $cd->bindParam(1, $clientname, PDO::PARAM_STR);
        $cd->bindParam(2, $clientsurname, PDO::PARAM_STR);
        $cd->bindParam(3, $clientgender, PDO::PARAM_STR);
        $cd->bindParam(4, $clientbirth);
        $cd->bindParam(5, $clientorder, PDO::PARAM_INT);
        $cd->bindParam(6, $id, PDO::PARAM_INT);
        $cd->execute();
    }
} else {
    echo 'wpisz imie!';
}