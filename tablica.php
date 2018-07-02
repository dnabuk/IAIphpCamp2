<?php
echo "<table cellpadding='1px' border='1px' style='border-collapse: collapse'>";
foreach (range(0, 19) as $liczba){
echo "<tr>";
    foreach (range("A", "T") as $litera){
    echo "<row><td>$liczba $litera</td></row>";
    }
    echo "</tr>";
}
echo "</table>";

