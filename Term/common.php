<?php
    function getdataconnection(){
        $username ="root";
        $password ="";
        $conn = new PDO('mysql:host=localhost;dbname=nba', $username, $password);
        return $conn;
    }

    function createtablehead(){
        echo "<tr>";
        echo "<td>Player</td>";
        echo "<td>Team</td>";
        echo "<td>Pts</td>";
    }
?>
