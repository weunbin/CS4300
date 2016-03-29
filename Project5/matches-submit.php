<?php include 'top.html';?>
<?php 
	$singles="singles.txt";
    
    $list = file_get_contents($singles);
    $arr = preg_split("/\r\n|\n|\r/", $list);
    $name = $_POST["name"];
    $person = null;
    $match;
    for ($i = 0; $i < count($arr); $i++) {
        $temp = explode(",", $arr[$i]);
        if (strcmp($name, $temp[0]) == 0) {
            $person = $temp;
        }
    }
    if (is_null($person) || strcmp("", $person[0]) == 0) {
        echo "<p><strong>Error! Invalid data.</strong><p>We're sorry. You submitted invalid
        user information. Please go back and try again.";
    } else {
        echo "<p><strong>Matches for ".$name."</strong><p>";
    }
 ?>
        
<?php include 'bottom.html' ?>
