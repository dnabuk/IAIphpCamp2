<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
        $link = mysqli_connect("127.0.0.1", "root", "");
        mysqli_select_db($link, "phpcamp_jszafraniak");
        for ($i = 0; $i < 11; $i++) {
            $resultHandle = mysqli_query($link, "SELECT clients.name, clients.surname, clients.city, orders.order_number FROM clients, orders INNER JOIN orders ON clients.id=orders.client_id LIMIT 10");
        }
        while ($data = mysqli_fetch_assoc($resultHandle)) {
            //var_dump($data);
            echo "name: " . $data['clients.name'] . ', ' . "surname: " . $data['clients.surname'] . ', ' . "city: " . $data['clients.city'] . "order number: " . $data['orders.order_number'];
            echo '<br/>';
        }
        ?>
    </body>
</html>

