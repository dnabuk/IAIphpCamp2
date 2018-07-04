<!DOCTYPE html>
<html>
<body>
<?php

//phpinfo();
//die;
$link = mysqli_connect ("127.0.0.1", "root", "");
mysqli_select_db($link, "phpcamp_apabisiak");

 for ($i = 0; $i < 11; $i++) {
            $resultHandle = mysqli_query($link, "SELECT * FROM clients INNER JOIN zamowienia on zamowienia.client_id=clients.id");
        }
        while ($data = mysqli_fetch_assoc($resultHandle)) {
            //var_dump($data);
            echo "name: " . $data['name'] . ', ' . "surname: " . $data['surname'] . ', ' . "city: " . $data['city']. ',' . "order_number: ".$data['order_number'];
            echo '<br/>';
        }

?>
</body>
</html>