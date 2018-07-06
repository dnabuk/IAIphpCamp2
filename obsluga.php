<!DOCTYPE html>
<html>
    <head>
        <title>AJAX #1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <div id="demo">
            <h2>PHP Camp</h2>
            <button type="button" onclick="loadNewText()">Czary mary</button>
        </div>
        
        <script type="text/javascript">
            function loadNewText() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                  if (this.readyState === 4 && this.status === 200) {
                    document.getElementById("demo").innerHTML = this.responseText;
                  }
                };
                xhttp.open("POST", "http://localhost/PHP5/make-move.php", true);
                xhttp.send();
            }
            
               var parameters = {
                "key": "",
                "direction": "",
                "distance": 0,
                "fire": 0
                };
                
                
                // Neither was accepted when I set with parameters="username=myname"+"&password=mypass" as the server may not accept that

                function doFunction() {
                  xmlhttp.send(parameters);
                }

        </script>
    </body>
</html>