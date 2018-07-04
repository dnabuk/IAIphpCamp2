<?php

class VirtualProduct extends ProductBase {

	protected $attachement;
	protected $key;
	protected $file_size;
	

	public function setAttachement($att){
		$this->attachement = $att;
	}

	public function getAttachement() {
		return $this->attachement;
	}
	
	public function setKey($key){
		$this->key = $key;
	}

	public function getKey() {
		return $this->key;
	}

	public function setFileSize($fs){
		$this->file_size = $fs;
	}

	public function getFileSize() {
		return $this->file_size;
	}



	
}

?>