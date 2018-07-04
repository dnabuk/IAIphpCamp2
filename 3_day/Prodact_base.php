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
	function __construct()
	{
		//$this->cena=200;
		//$this->id=1;
		//$this->nazwa='Kubek';
		//$this->waga=10;
	

		//echo "construktor";
	}
	public function __set($name,$value)
	{
		if(property_exists($this, $name)){
		echo 'ustawiam '.$name.'  wartością '.$value;
		
		$this->{$name}=$value;
	}else{
		throw new Exception("podana wartość nie istnieje",10);
		
		//echo "podana wartość nie istnieje";
	}
	}/*
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
	}*/
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
	}
	function __destruct()
	{

		echo "wywołanie destruktora";
	}
}