<?php include 'top.html';?>
	<body>
		<form method="post" action="signup-submit.php">
			<fieldset>
				<legend>New User Signup:</legend>
				<p>
                    <label for="name"><strong>Name:</strong></label>
				    <input type="text" name="name" id="name" maxlength="16">
				<p>
                    <label for="gender"><strong>Gender:</strong></label>
				    <input type="radio" name="gender" value="M">Male
				    <input type="radio" name="gender" value="F" checked> Female
				<p>
                    <label><strong>Age:</strong></label>
				    <input type="text" name="age" size="6" maxlength="2" id="age">
				<p>
                    <label><strong>Personality type:</strong></label>
				    <input type="text" name = "ptype" size="6" pattern="[ieIE]{1}[snSN]{1}[ftFT]{1}[jpJP]{1}">
				    (
				    <a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">
				    Don't know your type?	
				    </a>
				    )
				<p>
                    <label><strong>Favorite OS</strong></label>
				    <select name="os">
                        <option selected>Windows</option>
                        <option>Mac OS X</option>
                        <option>Linux</option>
				    </select>
				<p>
                    <label><strong>Seeking Age:</strong></label>
				    <input type="text" name="seekMin" size="6" placeholder="min" maxlength="2" id="seekMin">
				    to
				    <input type="text" name="seekMax" size="6" placeholder="max" maxlength="2" id="seekMax">
				<p>
				<input type="submit" value="Sign Up">
			</fieldset>
		</form>
	</body>
<?php include 'bottom.html' ?>
