<?php include 'top.html';?>
	<body>
		<form method="get" action="matches-submit.php">
			<fieldset>
				<legend>Returning User:</legend>
                <ul>
				<p>
				<label for="name">Name:</label>
				    <li><input type="text" name="name" id="name" maxlength="16"></li>
				<p>
                </ul>
				
				<input type="submit" value="View My Matches">
			</fieldset>
		</form>
	</body>
<?php include 'bottom.html' ?>
