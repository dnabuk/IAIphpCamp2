<?php
class produkt_db{
	protected $id;
	protected $nazwa;
	protected $producent;
	protected $cena;
	protected $waluta;
	protected $opis;
	/*public function __set($nazwa,$wartosc){
		/*if(property_exists($this,$nazwa)){
		echo "ustawiam ".$nazwa." o wartości ".$wartosc." ";}else{
			echo"brak pola";}} */
	

	/*public function __get($naz){
		return $this->get($naz);}*/
		
	/*public function __call($nazwa,$id){
		echo "próba wykonania funkcji nazwa";}*/
		
	public function __isset($nazwa)
    {
        echo "test";
    }
	public function __unset($nazwa){
		echo "unset";
		}
}
?>
