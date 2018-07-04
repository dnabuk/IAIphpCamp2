<?php
echo '<html><body></body>';

$name = "<script>alert('Hacked')</script>";
$name =addlashes($name);
echo $name .'<br />' . "\n";

$name = htmlspecialchars($name);
echo $name . '<br />';

if (1=='1 abac'){
    echo 'rowne';
}

echo '</body><body></body>';