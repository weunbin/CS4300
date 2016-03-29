<?php include 'top.html';?>
    <p>
		<strong>Matches for  <?php echo $_POST["name"];?></strong>
	<p>
<?php 
	$singles="singles.txt";
    
    $list = file_get_contents($singles);
    
 ?>
        
<?php include 'bottom.html' ?>
