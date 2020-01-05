
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

	<script>
		$(function(){
			$('#name').autocomplete({
				source: "search.php",
			});
		});
	</script>


	<div class="container">
		<p>Your Skills: <input type="text"  id="name"/> </p>
	</div>

