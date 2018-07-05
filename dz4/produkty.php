<?php

error_reporting(0); //żeby nie pokazywał ostrzeżeń

$products =
[
	["id" => 1, "nazwa" => "kubek", "cena" => 5],
	["id" => 2, "nazwa" => "szklanka", "cena" => 2],
	["id" => 3, "nazwa" => "butelka", "cena" => 3],
	["id" => 4, "nazwa" => "czajnik", "cena" => 7],
	["id" => 5, "nazwa" => "filizanka", "cena" => 4]
]; //tab z 5 tab aso

echo json_encode($products);
exit();					//---------------------------------------------------------------------exit()


$id = $_GET['id'];
$action = $_GET['action'];
$name = $_GET['name'];
$price = $_GET['price'];

//http://localhost/phpCamp2018/dz4/produkty.php?id=10&action=add&name=%22owoc%22&price=5
//http://localhost/phpCamp2018/dz4/produkty.php?id=5&action=remove&name=%22kubek%22&price=5
//http://localhost/phpCamp2018/dz4/produkty.php?id=3&action=check&name=butelka&price=5

/*echo '<table border = "1" cellpadding = "3" cellspacing = "0">';
echo "<tr>
		<td>Id</td><td>Nazwa</td><td>Cena</td>
	<tr/>";*/	
$wynik ="";
	
	//switch ($action) {
	//case "check":
	if ($action === "check") //=== - porównanie tez typu
	{
		
		foreach ($products as $product)
		{
			if ($product["nazwa"] == $name)
			{
				$wynik = $product;
				break;
			}
		}
	}
	//case "add":
	else if ($action === "add" )
	{
		/*$flag = 0;
		foreach ($products as $product)
		{
			if ($product["id" == $id])
			{
				$flag = 1;
				break;
			}
		}
		if ($flag)
		{
			echo "produkt o takiej nazwie już istnieje";
		}
		else*/
		//{
			$products[] = array("id" => $id, "nazwa" => $name, "cena" => "price");
			$wynik = $products;
		//}
	}
	//case "remove":
	else if ($action === "remove")
	{
		foreach ($products as $index=> $product)
		{
			if ($product["id"] == $id)
			{
				unset($product[$index]);
			}
			$wynik = $products;
		}
	}
	
print_r($wynik);

?>