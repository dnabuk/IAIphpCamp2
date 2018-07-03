<?php
Class SqlClass{
    private $host= "localhost";
    private $db_log= "root";
    private $db_pass= "";
    private $db_name="phpcamp_pchowratowicz";

    public $link;

    function openConnection(){
        $link = mysqli_connect($host, $db_log, $db_pass);
        mysqli_select_db($link, $db_name);
    }
    function setQuery($zapytanie){
        $resultHandle = mysqli_query($this->$link, $zapytanie);
        $rowsFetched = mysqli_num_rows($resultHandle);
        $rowsAffected = mysqli_affected_rows($link);
    }

}
?>