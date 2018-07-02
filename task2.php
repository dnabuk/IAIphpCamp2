<?php
function show($a){
	echo '<p>'.$a.' = '.eval('return '.$a.';').'</p>';
}

show("1+'1'");
show("1+'-1.1'");
show("1+'-0.3e3'");
show("1+'30 uczestników'");
show("1+'#2 PHP Camp'");
show("'1'+1");

show("1.1+1");
show("1+1.1");
show('1.'.'1+1');


?>