<?php
$numberArray = range(0,19);
$lettersArray = range('a','t');
echo '<table border="1">';
$i = 0;
foreach ($numberArray as $numberKey => $numberValue ){
echo '<tr>';

    foreach ($lettersArray as $letterKey => $letterValue){
        $i++;
        echo '<td ';
        if ($i%2==0){
            echo 'bgcolor="red"';
        }
        else {
            echo 'bgcolor="yellow"';
        }
        echo '>';
        echo $numberValue . $letterValue ;
        echo '</td>';
    }
    $i++;
    echo '</tr>';
}
echo '</table>';