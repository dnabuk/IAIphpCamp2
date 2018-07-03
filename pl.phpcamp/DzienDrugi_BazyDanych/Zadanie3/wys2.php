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

$limit = 100;
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $limit;

$sql = "SELECT * FROM `clients` ORDER BY `name` ASC LIMIT '$start_from', '$limit'";
$rs_result = mysqli_query ($connect, $sql);
?>
<table class="table table-bordered table-striped">
<thead>
<tr>
<th>title</th>
<th>body</th>
</tr>
<thead>
<tbody>
<?php
while ($row = mysqli_fetch_array($rs_result)) {
?>
            <tr>
            <td><? echo $row["name"]; ?></td>
            <td><? echo $row["surname"]; ?></td>
            </tr>
<?php
};
?>
</tbody>
</table>
<?php
    $rs_result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_row($rs_result);
    $total_records = $row[0];
    $total_pages = ceil($total_records / $limit);
    $pagLink = "<div class='pagination'>";
    for ($i=1; $i<=$total_pages; $i++) {
                 $pagLink .= "<a href='index.php?page=".$i."'>".$i."</a>";
    }
    echo $pagLink . "</div>";
?>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.0.min.js"></script>
</body>
</html>