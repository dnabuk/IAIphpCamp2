<?php
$numerCelki = 0;
echo "<table cellspacing='0px'; border='2px'; cellpadding='15px' style='border-collapse: collapse'>";
foreach (range(0, 19) as $liczba){
    $liczbaParzysta = $liczba % 2 == 0;
echo "<tr>";
    foreach (range("A", "T") as $litera){
        $numerCelki = $numerCelki + 1;
        $jasnaCellka = $numerCelki % 2 == 0;
        if($liczbaParzysta){
            $jasnaCellka = !$jasnaCellka;
        }
        if($jasnaCellka){
            $kolor = "#dddddd";
        } else {
            $kolor = "#555555";
        }

        echo "<td style='background: $kolor'>$liczba $litera</td>";
    }
    echo "</tr>";
}
echo "</table>";

