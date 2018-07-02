<?php
    $litery = range("A","T");
    for($i=0; $i<20; $i++)
    {
        foreach($litery as $j)
        {
            echo '<div style="display: inline-block; background-color:white; width: 50px; height: 50px; border: solid 1px black;">'.$i.$j.'</div><br>';
            if($j == "T")
                echo "<br>";
        }
    }      
?>