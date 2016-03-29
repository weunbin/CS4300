<?php include 'top.html';?>
	<body>
		<form method="post" action="signup-submit.php">
			<fieldset>
				<legend>New User Signup:</legend>
				<p>
				<label for="name">Name:</label>
				<input type="text" name="name" id="name">
				<p>
				<label for="gender">Gender:</label>
				<input type="radio" name="gender" value="M">Male
				<input type="radio" name="gender" value="F" checked> Female
				<p>
				<label>Age:</label>
				<input type="text" name="age" size="6" maxlength="2" id="age">
				<p>
				<label>	Personality type:</label>
				<input type="text" name = "ptype" size="6">
				(
				<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">
				Don't know your type?	
				</a>
				)
				<p>
				<label>Favorite OS</label>
				<select name="os">
					<option selected>Windows</option>
					<option>Mac OS X</option>
					<option>Linux</option>
				</select>
				<p>
                    <label>Seeking Age:</label>label>
				<input type="text" name="seekMin" size="6" placeholder="min" maxlength="2" id="seekMin">
				to
				<input type="text" name="seekMax" size="6" placeholder="max" maxlength="2" id="seekMax">
				<p>
				<input type="submit" value="Sign Up">
			</fieldset>
		</form>
	</body>
<?php include 'bottom.html' ?>
