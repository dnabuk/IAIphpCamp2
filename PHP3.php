<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
        include_once('db_config.inc');
        //$link = mysqli_connect ("127.0.0.1", "root", "");
        //mysqli_select_db($link, "phpcamp_jszafraniak");
        var_dump($_POST);
        $mysqliConnection = mysqli_connect("127.0.0.1", "root", "");
        $mysqliConnection->select_db($link, "phpcamp_jszafraniak");
        $_GET['id'] = (int) $_GET['id'];
        $query = 'SELECT * FROM clients WHERE id = ' . $_GET['id'];
        echo $query . '<br/>';
        $query = 'SELECT * FROM clients WHERE id = ' . mysqli_real_escape_string($mysqliConnection, $_GET['id']);
        echo $query . '<br/>';
        if ($result = $mysqliConnection->query($query)){
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()){
                    echo $row['id'] . ' ' . $row['name'] . $row['gender'] . '<br/>';
                }
            }
        }
        ?>
    </body>
</html>

