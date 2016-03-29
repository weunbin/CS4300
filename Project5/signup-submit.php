<?php 
	include '/top.html';
?>
	<p>
		<strong>Thank You!</strong>
	<p>
	Welcom to NerdLuv, <?php echo $_POST["name"];?>
	<p>
	Now <a href="matches.php"> log in to see your matches!</a>
	
<?php 
	$singles="/singles.txt";
	$userData = $_POST["name"] . "," . $_POST["gender"] . "," . $_POST["age"] . "," .$_POST["ptype"] . "," . $_POST["os"] . "," . $_POST["seekMin"] . "," . $_POST["seekMax"]."\n";
	file_put_contents($singles, $userData,FILE_USE_INCLUDE_PATH | FILE_APPEND);
	
 ?>
<?php include '/bottom.html'?>
