<?php
    function getdataconnection(){
        $username ="root";
        $password ="";
        $conn = new PDO('mysql:host=localhost;dbname=nbadatabase', $username, $password);
        return $conn;
    }
        
    

?>
