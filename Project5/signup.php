<!DOCTYPE html>
<html>
	<!--
	This provided file is the front page that links to two of the files
	you are going to write, signup.php and matches.php.
	You can modify this file as necessary to move redundant code out to common.php.
	-->
	
	<head>
		<title>NerdLuv</title>
		
		<meta charset="utf-8" />
		
		<!-- instructor-provided CSS and JavaScript links; do not modify -->
		<link href="heart.gif" type="image/gif" rel="shortcut icon" />
		<link href="nerdluv.css" type="text/css" rel="stylesheet" />
		
		<script src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.0.0/prototype.js" type="text/javascript"></script>
		
	</head>
	<body>
	
	<div id="bannerarea">
			<img src="nerdluv.png" alt="banner logo" /> <br />
			where meek geeks meet
		</div>
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
				<input type="text" name="age" size="6" maxlength="2">
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
				  
				<label>Seeking Age:<label>
				<input type="text" name="seekMin" size="6" placeholder="min" maxlength="2">
				to
				<input type="text" name="seekMax" size="6" placeholder="max" maxlength="2">
				<p>
				<input type="submit"
				
			</fieldset>
		</form>
	
	</body>
</html>
