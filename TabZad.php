<?php
$numbersTable = range(0, 19);
$lettersTable = range('A', 'T');
foreach ($numbersTable as $number){
    echo "<div>";
    foreach ($lettersTable as $letters) {
        echo $number.$letters;
    };
    echo "</div>";
}
