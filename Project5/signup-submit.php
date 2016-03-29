<html>
<head>
		<title>NerdLuv</title>
		
		<meta charset="utf-8" />
		
		<!-- instructor-provided CSS and JavaScript links; do not modify -->
		<link href="heart.gif" type="image/gif" rel="shortcut icon" />
		<link href="nerdluv.css" type="text/css" rel="stylesheet" />
		
		<script src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.0.0/prototype.js" type="text/javascript"></script>
		
	</head>
<body>
<?php 
	$singles=fopen("singles.txt","a")
	$userData = $_POST["name"] . ',' . $_POST["gender"] . ',' . $_POST["age"] . ',' .$_POST["ptype"] . ',' . $_POST["os"] . ',' . $_POST["seekMin"] . ',' . $_POST["seekMax"].\n;
	file_put_contents($singles, $userData, FILE_APPEND)
 ?>
</body>
</html>
