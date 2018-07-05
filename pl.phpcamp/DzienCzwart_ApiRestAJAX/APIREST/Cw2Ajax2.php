<!DOCTYPE html>
<html>
<head>
    <title>AJAX #2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
<div id="demo">
    <h2>PHP Camp</h2>
    <button type="button">Czary mary jQuery</button>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $("button").click(function(){
            $.ajax({
                url: "http://localhost/Camp2/pl.phpcamp/DzienCzwart_ApiRestAJAX/APIREST/ajax-info.txt", success: function(result){
                $("#demo").html(result);
            }
            });
        });
    });
</script>
</body>
</html>