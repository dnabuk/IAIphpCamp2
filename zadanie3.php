<?php
	include("connect.php");
?>
<form method="get">
<input type="button" name="poprzedni" value="poprzedni"/>
<input type="button" name="kolejny" value="kolejny"/>
</form>
<table>
	<?php
	
	if(!isset($_GET["strona"])){
	$zap="select name, surname from clients limit 0,100";
		$l=0;}else{
		$l=$_GET["strona"];
		$first=$l*100;
		$last=$l*100+100;
		$zap="select name, surname from clients limit $first,$last";
		}
	
	$wynik=mysqli_query($link,$zap);
	while($k=mysqli_fetch_assoc($wynik)){
		
	?>
	<tr>
    	<td>
        	<?php
				echo $k['name'];
			?>
        </td>
        <td>
        	<?php
				echo $k['surname'];
			?>
        </td>
    </tr>
    <?php
	}
	?>
</table>
