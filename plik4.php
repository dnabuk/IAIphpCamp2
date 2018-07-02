<?php
$letters="ABCDEFGHIJKLMNOPQRST";
echo "<table style=\"border:1px;\">";
for ($i = 0; $i <20; $i++){
echo "<tr>";
  for ($j = 0; $j <20; $j++){
      echo "<td>$i $letters[$j]</td>";
  }
echo "</tr>";
}
echo "</table>"
 ?>
