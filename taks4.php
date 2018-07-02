<?php
$t1 = range(0, 19);
$t2 = range('A', 'T');

foreach ($t1 as $a){
    echo "<div>";
    foreach ($t2 as $b) {
        for($i = 1; $i <=20; $i++) {
            if ($i % 2)
                echo '<div style="display: inline-block; background-color:white; width: 50px; height: 50px; border: solid 1px black;">';
            else
                echo '<div style="display: inline-block; background-color:red; width: 50px; height: 50px; border: solid 1px black;">';
        }
        echo $a.$b;
        echo '</div>';
    };
    echo "</div>";
}