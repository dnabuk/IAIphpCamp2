<?php
    for( $j = 0; $j < 20; $j++ ) // kolumna
    {
        echo '<div style="display: inline-block; white-space: nowrap;">';
        foreach(range('A','T') as $l)
        {
            $a = ord($l) + $j;
            if( $a % 2 == 0 )
            {
                echo '<div style="display: inline-block; 
                background-color:yellow; 
                width: 50px; height: 50px; 
                border: solid 1px black;">'.$j.$l.'</div>';
            }
            else
            {
                echo '<div style="display: inline-block; 
                background-color:red; 
                width: 50px; 
                height: 50px; 
                border: solid 1px black;">'.$j.$l.'</div>';
            }      
        } 
        echo '</div>';
    }
?>