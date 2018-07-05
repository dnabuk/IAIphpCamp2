<!DOCTYPE html>
<html>
<head>
<title>AJAX #2</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>


<div id="main">
	<h2>PHP Camp</h2>
	<button type="button" name="btnWczytaj">Wczytaj rekordy</button>
		<table border="1" width="100%">
		<tr>
			<td>ID</td>
			<td>Nazwa</td>
			<td>Cena</td>
			<td>Akcja</td>
		</tr>
		<tr id="demo">
			<td colspan="4">Brak rekordow</td>
		</tr>		
	</table>
</div>

<script type="text/javascript">
$(document).ready(function() {
	$("button[name='btnWczytaj']").click(function(){
		$.ajax({
			url: "http://localhost/dzie%C5%84%204/gitdemo-ajax/projekt/api.php/getProducts", success: function(result){
				$("#demo").replaceWith(result);
				
				$("button[name='btnUsun']").click(function(){
					id = this.id;
					$.ajax({
						url: "http://localhost/dzie%C5%84%204/gitdemo-ajax/projekt/api.php/removeProduct/" + id, success: function(result){
							$("#demo").replaceWith("test");
						}
					});
				});
				
			}
		});
	});
});
	</script>
	</body>
	</html>