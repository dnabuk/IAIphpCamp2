<?php
$table= array();

foreach (range(0, 19) as $number) {
    foreach (range('A', 'T') as $symbol) {
        $table[]=$number . $symbol;
    }
}
//var_dump($table);
$i=0;
$y=0;
echo "<table>";
foreach (range(0, 19) as $x) {
    echo "<tr>";
    foreach (range(0, 19) as $y) {
        if (y == 0) {
        if ($i % 2 == 1) {
            echo "<td  style='border: 1px solid black; background: yellow'>";
        } else {
            echo "<td  style='border: 1px solid black; background: red'>";
        }
    }
        echo "<p>".$table[$i]."</p>";
        echo "</td>";
        $i++;
    }
    echo "</tr>";

}
echo "</table>";
/*
echo "<table>";
foreach ()
            echo "<tr>";
            foreach ($table as $key => $value) {

            echo "<p>".$value."</p>";
            $table[] = $number . $symbol;
            echo "</td>";
        }
        echo "</tr>";
echo "</table>";*/