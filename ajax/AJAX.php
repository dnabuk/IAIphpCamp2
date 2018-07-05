
<!DOCTYPE html>
<html>
<head>
<title>AJAX #1</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<div id="demo">
<table id="table" border = 1></table>
<h2>PHP Camp</h2>
<button type="button" onclick="loadNewText()">Czary mary</button>
</div>

<script type="text/javascript">
function loadNewText() {
	var isNext = true;

	var x = 0;
	var xhttp = new XMLHttpRequest();
	var tab = document.getElementById('table');
	do{
	var row = tab.insertRow(x);
	
    
	
    xhttp.open("GET", "http://localhost/phpcamp/index.php/products/"+x, false);
	
	xhttp.send();
	var table = xhttp.response;
	if(table =="No such file or directory"){
		isNext=false;
		break;
	}else{
	table=JSON.parse(table);}
	for(var y in table){
	var cell = row.insertCell();
	cell.innerHTML = table[y];
	
	}
	var cell = row.insertCell();
	var btn = document.createElement("BUTTON");
	
	cell.appendChild(btn);
	btn.appendChild(document.createTextNode("DELET THIS"));
	btn.onclick = function(){{
		var xhttp = new XMLHttpRequest();
		  xhttp.open("DELETE", "http://localhost/phpcamp/index.php/products/"+x, false);
		  xhttp.send();
		  console.log("deletored");
	}
	};
	
	
	x++;
	
	
	}while(isNext);
	
}

</script>
</body>
</html>