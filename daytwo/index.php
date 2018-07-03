<?php
$link = mysqli_connect ("localhost", "dagmara", "", 'phpcamp_dtega');

mysqli_select_db($link, "phpcamp_dtega");
$query = 'SELECT * FROM `clients` limit 5';
$resultHandle = mysqli_query($link, $query);
$rowsFetched = mysqli_num_rows($resultHandle);
$rowsAffected = mysqli_affected_rows($link);
while ($data = mysqli_fetch_assoc($resultHandle)){
    var_dump($data);

}
