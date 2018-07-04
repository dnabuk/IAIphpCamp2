<?php
require_once('./klasabaza.php');

class VirtualProduct extends Base{
    protected $attachment;
    protected $keys;
    protected $sizeOfFile;

    public function setVirtualProduct($newId, $newName, $newPhoto, $newDescription, $newAttachment, $newKeys, $newSizeOfFile, $newPrice,$newCurrency){
        $this->id = $newId;
        $this->name = $newName;
        $this->photo = $newPhoto;
        $this->description = $newDescription;
        $this->attachment = $newAttachment;
        $this->keys = $newKeys;
        $this->sizeOfFile = $newSizeOfFile;
        $this->price= $newPrice;
        $this->currency=$newCurrency;
    }
}

