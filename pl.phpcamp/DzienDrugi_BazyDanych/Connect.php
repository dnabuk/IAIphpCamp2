<?php
/*require_once "LoginDatabase.php";

$connect = mysqli_connect("$host", "$db_user", "$db_password", "$db_name");
$connect->set_charset("utf8");
if (!$connect) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
echo 'Imię osób urodzonych po 04-10-2016r';
$query = "SELECT `name`, `date_of_birth` FROM `clients` WHERE `gender` = 'male' AND `date_of_birth` >= '2016-10-04'";
$resultHandle = mysqli_query($connect, $query);
while ($row = mysqli_fetch_array($resultHandle)) {

    echo '<div>
          </br><span class="badge" style="background-color: yellow;">' . $row['name'] . '</span>' . ' urodzona w roku: ' . '<span class="badge" style="background-color: yellow";>' . $row['date_of_birth'] . '</span></div>';
    echo '<pre>';
    var_dump($row);
    echo  '</pre>';
}*/

class Connect{
    private $host;
    private $db_user;
    private $db_password;
    private $db_name;


    public function __construct($host, $db_user, $db_password, $db_name){
        $this->host = $host;
        $this->db_user = $db_user;
        $this->db_password = $db_password;
        $this->db_name = $db_name;
    }

}





