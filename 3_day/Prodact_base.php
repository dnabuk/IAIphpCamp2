<?php

class Prodact_base
{
	protected $cena;
	protected $id;
	protected $nazwa;
	protected $producent;
	protected $zdjęcie;
	protected $opis;
	protected $kategoria;
	protected $waluta;
	function __construct() // konstruktor wykonuje się w trakcie tworzenia obiektu
	{
		//$this->cena=200;
		//$this->id=1;
		//$this->nazwa='Kubek';
		//$this->waga=10;
	

		//echo "construktor";
	}
	public function __set($name,$value) // zastępuje ustawianie wartości uniwersalnie 
	{
		if(property_exists($this, $name)){
		echo 'ustawiam '.$name.'  wartością '.$value;
		
		$this->{$name}=$value;
	}else{
		throw new Exception("podana wartość nie istnieje",10); // zwraca wyjątek
		
		//echo "podana wartość nie istnieje";
	}
	}
	public function __get($name){ //zastępuje metody pobierania danch w uniwersalny sposób
		return $this->{$name};
	}

public function __call($name,$arg)//wywołuje się gdy niegdzie niema funkcji
{
	echo "próba wywołania metody $name";
}
public function __isset($name) //sprawdza czy zmienna jest ustawiona 
{
	$this->{$name}='dane';
}
public function __unset($name) // usuwa wartość zmienną
{
	$this->{$name}=null;
}

	/* nie potrzebne jeśli korzystamy z funkcji magicznych __set oraz __get to dwie funkcje zastępują poniższy kod.
	public function Setcena($cena)
	{
		$this->cena=$cena;
	}
	public function Setwaluta($waluta)
	{
		$this->waluta=$waluta;
	}
	public function Setproducent($producent)
	{
		$this->producent=$producent;
	}
	public function Setzdjęcie($zdjęcie)
	{
		$this->zdjęcie=$zdjęcie;
	}
	public function Setkategoria($kategoria)
	{
		$this->kategoria=$kategoria;
	}
	
	public function Setopis($opis)
	{
		$this->opis=$opis;
	}
	public function Setname($name)
	{
		$this->nazwa=$name;
	}
	public function Setid($id)
	{
		$this->id=$id;
	}
	public function Getid()
	{
		return $this->id;
	}
	public function Getcena()
	{
		return $this->cena;
	}
	public function Getwaluta()
	{
		return $this->waluta;
	}
	public function Getnazwa()
	{
		return $this->nazwa;
	}
	public function Getopis()
	{
		return $this->opis;
	}
	public function Getzdjęcie()
	{
		return $this->zdjęcie;
	}
	public function Getkategoria()
	{
		return $this->kategoria;
	}
	public function Getproducent()
	{
		return $this->producent;
	}*/
	function __destruct()
	{

		echo "wywołanie destruktora";
	}
}