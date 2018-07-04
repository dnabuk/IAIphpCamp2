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
            $resultHandle = mysqli_query($link, "SELECT client_id, order_number FROM orders LIMIT 10");
        }
        while ($data = mysqli_fetch_assoc($resultHandle)) {
            //var_dump($data);
            echo "client id: " . $data['client_id'] . ', ' . "order number: " . $data['order_number'];
            echo '<br/>';
        }
        ?>
    </body>
</html>

