<!DOCTYPE html>

<html>
    <head>
        <title>AJAX</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    </head>
    <body>
       
        <?php 
			require_once('zad3.php');
			
			$akcja = (isset($_GET['akcja'])) ? $_GET['akcja'] : null;
			switch($akcja)
			{
				case 'usun':
					if(isset($_GET['id']))
						delete($_GET['id']);
				break;
				
			}
			table();
		?>
        <script type="text/javascript">
                function usun(id) {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                  if (this.readyState === 4 && this.status === 200) {
                    document.getElementById("demo").innerHTML = this.responseText;
                  }
                };
                xhttp.open("GET", "http://localhost/phpcamp/ajax/ajax3.php?akcja=usun&id="+id, true);
                xhttp.send();
            }
        </script>
    </body>
</html>
