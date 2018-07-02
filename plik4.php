<?php
$letters = array(A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T);

echo "<table>";

for ($i = 0; $i <20; $i++){
  echo "<tr>";

  for ($j = 0; $j <20; $j++){
      echo "<td>$i $letters[$j]</td>";
  }

  echo "</tr>";
}

echo "</table>";




 ?>
