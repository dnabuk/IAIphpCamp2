<!DOCTYPE html>
<html>
<body>
<?php
$x=1;
$y=0;
/*for ($x = 0; $x <= 19; $x++) {
    $poziom
} 
*/

<table>
<tr>
 <td></td>
</tr>
</table>
foreach (range(0, 19) as $x) {
foreach (range('A', 'T') as $letter) {
  echo '<div style="width:10px ;height=10px">'.$x .$letter .'<div/>';
}}
?>
</body>
</html>
