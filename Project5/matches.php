<?php include 'top.html';?>
	<body>
		<form method="get" action="matches-submit.php">
			<fieldset>
				<legend>Returning User:</legend>
				<p>
				<label for="name">Name:</label>
				<input type="text" name="name" id="name" maxlength="16">
				<p>
				
				<input type="submit" value="View My Matches">
			</fieldset>
		</form>
	</body>
<?php include 'bottom.html' ?>
