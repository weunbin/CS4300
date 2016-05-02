<?php include 'top.html';?>
<?php 
	$singles="singles.txt";
    	$userName = $_POST["name"];
    	$userGender = $_POST["gender"];
    	$userAge = $_POST["age"];
    	$userType = $_POST["ptype"];
    	$userOS = $_POST["os"];
    	$userMin = $_POST["seekMin"];
    	$userMax = $_POST["seekMax"];
   	if (!ctype_alpha($userName) || !ctype_digit($userAge) || !ctype_digit($userMin) || !ctype_digit($userMax) || strlen($userType) != 4) {
        	echo "<p><strong>Error! Invalid data.</strong><p>We're sorry. You submitted invalid
        	user information. Please go back and try again.";
    	} else {
	        $number = 0;
	        for ($i = 0; $i < 4; $i++) {
	         	if (strcmp($userType[$i], "I") == 0) {
	                	$number++;
	            	}
	            	if (strcmp($userType[$i], "E") == 0) {
	                	$number++;
	            	}
	            	if (strcmp($userType[$i], "N") == 0) {
	                	$number++;
	            	}
	            	if (strcmp($userType[$i], "F") == 0) {
	                	$number++;
	            	}
	            	if (strcmp($userType[$i], "P") == 0) {
	                	$number++;
	            	}
	            	if (strcmp($userType[$i], "S") == 0) {
	                	$number++;
	            	}
	            	if (strcmp($userType[$i], "T") == 0) {
	                	$number++;
	            	}
	            	if (strcmp($userType[$i], "J") == 0) {
	                	$number++;
	            	}
	        }
	        if ($number == 4) {
	            	$userData = "\n" . $userName . "," . $userGender . "," . $userAge . "," . $userType . "," . $userOS . "," . $userMin . "," . $userMax;
	            	file_put_contents($singles, $userData,FILE_USE_INCLUDE_PATH | FILE_APPEND);
	        
	            	echo "<p><strong>Thank You!</strong><p>Welcome to NerdLuv, ".$userName."!<p>Now <a href=\"matches.php\"> log in to see your matches!</a>";
	        } else {
	            	echo "<p><strong>Error! Invalid data.</strong><p>We're sorry. You submitted invalid
	            	user information. Please go back and try again.";
	        }
    	}
?>
<?php include 'bottom.html'?>
