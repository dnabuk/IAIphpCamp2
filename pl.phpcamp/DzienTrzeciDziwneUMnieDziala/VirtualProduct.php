<?php
class VirtualProduct extends ProductBase {

    private $attach;
    private $key;
    private $fileSize;

    /**
     * VirtualProduct constructor.
     */
    public function __construct(){
    }


    /**
     * @return mixed
     */
    public function getAttach()
    {
        return $this->attach;
    }

    /**
     * @param mixed $attach
     */
    public function setAttach($attach)
    {
        $this->attach = $attach;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return mixed
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * @param mixed $fileSize
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
    }




    public function __destruct(){
        echo '<br />' .'destruktor'. '<br/>';
    }


}

