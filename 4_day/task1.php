<?php

$tablica1= array('id' => 1, 'nazwa' => 'Kubek', 'cena' => 200);
$tablica2= array('id' => 2, 'nazwa' => 'Lampa', 'cena' => 250);
$tablica3= array('id' => 3, 'nazwa' => 'Rower', 'cena' => 2500);
$tablica4= array('id' => 4, 'nazwa' => 'Młotek', 'cena' => 25);
$tablica5= array('id' => 5, 'nazwa' => 'Taca', 'cena' => 2);
$produkty=[$tablica1,$tablica2,$tablica3,$tablica4,$tablica5];
echo json_encode($produkty);
if (isset($_GET['action'])) {
	if ($_GET['action'] == 'checkProduct') {
		foreach ($produkty as $key => $value) {
			if ($value['nazwa'] == $_GET['name']) {
				
				var_dump($value);
			}
		}
	}
	if ($_GET['action'] == 'addProduct'){
		$tablica= array('id' => $_GET['id'], 'nazwa' => $_GET['name'], 'cena' => $_GET['price']);
		$produkty[]=$tablica;
		var_dump($produkty);

	}
	if ($_GET['action'] == 'removeProduct') {
		foreach ($produkty as $key => $value) {
			if ($value['id'] == $_GET['id']) {
				unset($produkty[$key]);
				var_dump($produkty);
			}
		}
	}



	
}