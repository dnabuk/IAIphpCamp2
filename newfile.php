<?php
$tablica = range("A","T");
$tab2 = range(0, 19);
foreach($tablica as $key=>$value){
    $tablica[$key]=$tab2;
    foreach($tab2 as $sub =>$subval){
        $tablica[$key][$sub]= $key.$subval;
    }
}
echo '<body>';
foreach($tablica as $key=>$value){
    echo '<br>';
    foreach($tab2 as $sub =>$subval){
        echo '<div style="display: inline-block; background-color:white; width: 50px; height: 50px; border: solid 1px black;">'.$tablica[$key][$sub].'</div>';
    }
}
echo '</body>';

var_dump($tablica);
?>

<?php
$letter = range("a","d");
print_r ($letter);
?> 