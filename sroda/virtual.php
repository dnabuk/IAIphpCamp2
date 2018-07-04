<?php

class ProductVirtual{
	private $attachment;
	private $licenceKey;
	private $size;
	
	function __construct(){	
		
	}
	function __destruct(){
		//echo 'destruktor';
	}
	
	public function setAttachment($t){
		$this->attachment=$t;
	}
	public function setKey($t){
		$this->licenceKey=$t;
	}
	public function setSize($t){
		$this->size=$t;
	}
	
	public function getAttachment(){
		return $this->attachment;
	}
	public function getKey(){
		return $this->licenceKey;
	}
	public function getSize(){
		return $this->size;
	}
	
}