<!DOCTYPE html>
<html>
    <head>
        <title>AJAX <3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    </head>
    <body>
        <?php
			require_once('zadanie.php');
			showTable();
			$products = getProducts();
		?>
        
        
        <script type="text/javascript">
            $(document).ready(function() {
               $("button").click(function(){
                $.ajax({
                    url: "http://localhost/iai/03/ajax/ajax-text.txt", success: function(result){
                        $(".button").html(result);
                    }
                });
            });

            });
        </script>
    </body>
</html>
