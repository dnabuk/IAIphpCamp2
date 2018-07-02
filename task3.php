<?php
$camp = array(
	1 		=> 'Oleksii',
	'1'		=> 'Fursov',
	1.99	=> 'no drink',
	true	=> 'Gniewko'
);


$camp[4] = '??';
show($camp);

$camp[] = 'Kot ma Alę';
show($camp);

unset($camp[4]);
show($camp);

$camp[] = 'Ale tez zawsze ma zawse \'jakieś ale\'';
show($camp);

for($i=1; $i<6; $i++){
	$camp[$i] = $i;
}
show($camp);

function show($a){
	echo '<pre>';
	var_dump($a);
	echo '</pre>';
}
?>