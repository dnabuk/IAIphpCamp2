<?php
$link = mysqli_connect('127.0.0.1', 'root', '');
var_dump(mysqli_select_db($link,"a_major"));
$resultHandle = mysqli_query($link,'SELECT * FROM `clients` LIMIT 10' );


while ($data = mysqli_fetch_assoc($resultHandle)){
    var_dump($data);
}

?>

    <form action ="add.php" method="POST>
    <input type ="text" name="client_name"/>

<?php
    $_POST['client_name'];

    $resultHandle = mysqli_query($link,'SELECT gender FROM `clients`');
    while ($data = mysqli_fetch_assoc($resultHandle)){
    var_dump($data);
}

    $resultHandle = mysqli_query($link,'INSERT INTO `clients` SET name="", surname="",gender=""');
    while ($data = mysqli_fetch_assoc($resultHandle)){
    var_dump($data);
}


    

?>
