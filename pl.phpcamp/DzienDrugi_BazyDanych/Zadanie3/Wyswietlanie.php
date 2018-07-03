<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
<?php
    require_once "../LoginDatabase.php";

    $connect = mysqli_connect("$host", "$db_user", "$db_password", "$db_name");
    $connect->set_charset("utf8");
    if (!$connect) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    //$query = "SELECT `name`, `surname` FROM `clients`";
    $query = "SELECT * FROM clients LEFT JOIN orders ON clients.id=orders.client_id GROUP BY clients.id HAVING SUM(orders.purchased_items) > 10";
    $result = $connect->query($query);
    if (!$result) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        echo "Error: " . $query . "</br>" . $connect->error;
        exit();
    }
    while ($row = mysqli_fetch_array($result)) {
        echo '<div>
          </br><span class="badge">' . $row['name'] . "\t" . $row['surname'] .'</span>
          </div>';
    }
mysqli_close($connect);
?>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.0.min.js"></script>
</body>
</html>