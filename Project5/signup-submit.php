<?php include 'top.html';?>
	<p>
		<strong>Thank You!</strong>
	<p>
	Welcom to NerdLuv, <?php echo $_POST["name"];?>!
	<p>
	Now <a href="matches.php"> log in to see your matches!</a>
	
<?php 
	$singles="/singles.txt";
    
  	$userName = $_POST["name"];
    	$userGender = $_POST["gender"];
    	$userAge = $_POST["age"];
    	$userType = $_POST["ptype"];
    	$userOS = $_POST["os"];
    	$userMin = $_POST["seekMin"];
    	$userMax = $_POST["seekMax"];
    
	$userData = "\n" . $userName . "," . $userGender . "," . $userAge . "," . $userType . "," . $userOS . "," . $userMin . "," . $userMax;
	file_put_contents($singles, $userData,FILE_USE_INCLUDE_PATH | FILE_APPEND);
 ?>
<?php include 'bottom.html'?>
