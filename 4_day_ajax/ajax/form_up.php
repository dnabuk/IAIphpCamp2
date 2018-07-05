 <button onclick="show_up_form(<?php echo $_POST['id']?>)">Pokaż</button> 
<script type="text/javascript">
 function show_up_form(id) {
           $(document).ready(function() {
			  var action = 'checkProduct';
			//alert(price);
		$.ajax ({
			type: "POST",
			url: "task4_5.php",
			data: {
				id:id,
				action:action
			}
		})
		.done(function(data) {
			var newHTML;
			newHTML = data;
			$('#form').html(newHTML);
			
	});
		});
        }
        </script>
        <div id="form">
	</div>