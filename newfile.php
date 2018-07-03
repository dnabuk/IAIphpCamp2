<?php
$tablica = range("A","T");
$tab2 = range(0, 19);
foreach($tab2 as $key=>$value){
    $tab2[$key]=$tablica;
    foreach($tablica as $sub =>$subval){
        $tab2[$key][$sub]= $value.$subval;
    }
}
echo '<body>';
foreach($tablica as $key=>$value){
    echo '<br>';
    foreach($tab2 as $sub =>$subval){
        echo '<div style="display: inline-block; background-color:white; width: 50px; height: 50px; border: solid 1px black;">'.$tab2[$key][$sub].'</div>';
    }
}
echo '</body>';

var_dump($tablica);
?>

<?php
$letter = range("a","d");
print_r ($letter);
?> 