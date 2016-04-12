<?php
    function getdataconnection(){
        $username ="root";
        $password ="";
        $conn = new PDO('mysql:host=localhost;dbname=imdb_small', $username, $password);
        return $conn;
    }
        
    function getactorid($fname, $lname){
        $conn = getdataconnection();
        $id_actor = $conn->query("SELECT id FROM actors a WHERE a.first_name = '".$fname."' AND a.last_name = '".$lname."'");  
        return $id_actor;
    }

    function createtablehead(){
        echo "<tr>";
        echo "<td>#</td>";
        echo "<td>Title</td>";
        echo "<td>Year</td>";
    }
?>