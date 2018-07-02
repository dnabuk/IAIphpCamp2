<?php
$numbersTable = range(0, 19);
$lettersTable = range('A', 'T');
foreach ($numbersTable as $number){
    echo "<div>";
    foreach ($lettersTable as $letters) {
        if ($number % 2 == 0) {
            echo '<div style="display: inline-block; background-color: #000080; width: 50px; height: 50px; border: solid 1px black;">';
        } else {
            echo '<div style="display: inline-block; background-color: #800000; width: 50px; height: 50px; border: solid 1px black;">';
        }
        echo $number.$letters;
        echo "</div>";
    };
    echo "</div>";
}
