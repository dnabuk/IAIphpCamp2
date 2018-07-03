<!DOCTYPE html>
<html>
<body>
<?php

//phpinfo();
//die;
$link = mysqli_connect ("127.0.0.1", "root", "");
mysqli_select_db($link, "phpcamp_apabisiak");
 for ($i = 0; $i < 11; $i++) {
            $resultHandle = mysqli_query($link, "SELECT name, surname, city FROM clients LIMIT 10");
        }
        while ($data = mysqli_fetch_assoc($resultHandle)) {
            //var_dump($data);
            echo "name: " . $data['name'] . ', ' . "surname: " . $data['surname'] . ', ' . "city: " . $data['city'];
            echo '<br/>';
        }

?>
</body>
</html>