<?php

echo '<table border-collapse = "collapse" >';

$num=0;

foreach(range(0,19) as $row){

  echo '<tr>';
  
  foreach(range('A','T') as $col){
    
    $array[$row][$col] = $row.$col;
    
    if (($row+$num) % 2 == 0) {
      echo '<td style="background-color: red; width: 50px; height: 50px; " >';
    }
    
    else {
      echo '<td style="background-color: yellow; width: 50px; height: 50px; ">';
    }
    
    echo $array[$row][$col];
    
    echo '</td>';
    
    $num=$num+1;
  }
  
  echo '</tr>';
}

echo '</table>';
?>