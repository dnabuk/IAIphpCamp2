<?php
$table= array();

foreach (range(0, 19) as $number) {
    foreach (range('A', 'T') as $symbol) {
        $table[]=$number . $symbol;
    }
}
//var_dump($table);
$i=0;
$y=true;
echo "<table>";
foreach (range(0, 19) as $x) {
    echo "<tr>";
    foreach (range(0, 19) as $y) {
        if ($y == true) {
            if ($i % 2 == 1) {
                echo "<td  style='border: 1px solid black; background: yellow'>";
            } else {
                echo "<td  style='border: 1px solid black; background: red'>";
            }
        }
        else{
            if ($i % 2 == 1) {
                echo "<td  style='border: 1px solid black; background: red'>";
            } else {
                echo "<td  style='border: 1px solid black; background: yellow'>";
            }
        }
        echo "<p>".$table[$i]."</p>";
        echo "</td>";
    }
    echo "</tr>";
    $y=!$y;

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