<?php

function generate_page_links($cur_page, $num_pages) {
     $page_links = '';
     if ($cur_page > 1) {
          $page_links .= '<a href="' . $_SERVER['PHP_SELF'] . '?page=' . ($cur_page - 1) . '">«</a> ';
     }
     $i = $cur_page - 4;
     $page = $i + 8;
     for ($i; $i <= $page; $i++) {
          if ($i > 0 && $i <= $num_pages) {
               if ($cur_page == $i  && $i != 0) {
                    $page_links .= '' . $i;
               }else {
                    if ($i == ($cur_page - 4) && ($cur_page - 5) != 0) { 
                         $page_links .= ' <a href="' . $_SERVER['PHP_SELF'] . '?page=1">1</a> '; 
                    }
                    if ($i == ($cur_page - 4) && (($cur_page - 6)) > 0) { 
                         $page_links .= ' <a href="' . $_SERVER['PHP_SELF'] . '?page=' . ($cur_page - 5) . '">...</a> '; 
                    }
                    $page_links .= ' <a href="' . $_SERVER['PHP_SELF'] . '?page=' . $i . '"> ' . $i . '</a> ';
                    if ($i == $page && (($cur_page + 4) - ($num_pages)) < -1) { 
                         $page_links .= ' <a href="' . $_SERVER['PHP_SELF'] . '?page=' . ($cur_page + 5) . '">...</a>'; 
                    }
                    if ($i == $page && ($cur_page + 4) != $num_pages) { 
                         $page_links .= ' <a href="' . $_SERVER['PHP_SELF'] . '?page=' . $num_pages . '">' . $num_pages . '</a> '; 
                    }
               }
          }
     }
     if ($cur_page < $num_pages) {
          $page_links .= '<a href="' . $_SERVER['PHP_SELF'] . '?page=' . ($cur_page + 1) . '">»</a>';
     }
     return $page_links;
}

$mysqli = mysqli_connect('localhost', 'root','' ,'phpcamp_kkucinska');
if ($mysqli->connect_error) {
	die('Connect Error ('.$mysqli->connect_errno.') '. $mysqli->connect_error);
}
$query = "SELECT * FROM `clients`";
$result = mysqli_query($mysqli, $query);



echo "Jest ".$result->num_rows." wynikow na stronie"."<br>";
$cur_page = isset($_GET['page']) ? $_GET['page'] : 1;
$results_per_page = 100;
$skip = (($cur_page - 1) * $results_per_page);
$total = $result->num_rows;
$num_pages = ceil($total / $results_per_page); 
$query .=  " LIMIT $skip, $results_per_page"; 
$result = mysqli_query($mysqli, $query);

if ($result->num_rows > 0) {
	if ($num_pages > 1) {
     echo generate_page_links($cur_page, $num_pages);
	}
    while($row = $result->fetch_assoc()) {
        echo "<br>id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["surname"]. " Płeć: " . $row["gender"]. " Data urodzenia: " . $row["date_of_birth"]. " Liczba zamowień: " . $row["orders_count"]. " Adres: " . $row["street"].", ".$row["city"].", ".$row["postcode"].", ".$row["country"]."<br>";
    }
} else {
    echo "0 results";
}



mysqli_free_result($result);
mysqli_close($mysqli);