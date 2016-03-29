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
			<?php include 'top.html';?>
		</div>

        <form action="matches-submit.php" method="get">
        <legend>Returning User:</legend>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" maxlength="16">
            <input type="submit" value="submit" name="View My Matches">
        </form>
        
        <div>
			<?php include 'bottom.html';?>
		</div>
        
    </body>