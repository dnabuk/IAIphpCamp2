<?php
$numberArray = range(0,19);
$lettersArray = range('a','t');
echo '<table border="1">';
foreach ($numberArray as $numberKey => $numberValue ){
echo '<tr>';

    foreach ($lettersArray as $letterKey => $letterValue){
        echo '<td>';
        echo $numberValue . $letterValue ;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';