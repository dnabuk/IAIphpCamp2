<!doctype html>
<html>
	<head>
	<style>
	td{
		border:1px #000 solid;}
	</style>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 	<script>
	 	
        	       function wys(id){
				 
            	    $.ajax({
                	    url: "http://localhost/ajax/appi.php/del/"+id, success: function(result){
                    	    $("#div").html(result);
                   	 }
                	});
            	};
				function dodaj(){
					var id = prompt("podaj id");
					var nazwa = prompt("podaj nazwe");
					var cena = prompt("podaj cene");
					 $.ajax({
                	    url: "http://localhost/ajax/appi.php/dod/"+id+"/"+nazwa+"/"+cena, success: function(result){
                    	    $("#div").html(result);
                   	 }
                	});
					}
				function update(id){
					
					var nazwa = prompt("podaj nową nazwe");
					var cena = prompt("podaj nową cene");
					 $.ajax({
                	    url: "http://localhost/ajax/appi.php/akt/"+id+"/"+nazwa+"/"+cena, success: function(result){
                    	    $("#div").html(result);
                   	 }
                	});
					}
           
	</script>
   	</head>
    <body>
    <div id="div">
<?php 
include_once("connect.php");
include_once("functions.php");
wysw();
?>
	</div>
	
    </body>
    
    </html>