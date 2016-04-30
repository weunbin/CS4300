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
        echo "<td>Games</td>";
        echo "<td>Min</td>";
        echo "<td>Pts</td>";
        echo "<td>Reb</td>";
        echo "<td>Ast</td>";
        echo "<td>Stl</td>";
        echo "<td>Blk</td>";
        echo "<td>TO</td>";
        echo "<td>FGM</td>";
        echo "<td>FGA</td>";
        echo "<td>FG%</td>";
        echo "<td>3PTM</td>";
        echo "<td>3PTA</td>";
        echo "<td>3PT%</td>";
        echo "<td>FTM</td>";
        echo "<td>FTA</td>";
        echo "<td>FT%</td>";
        echo "</tr>";
    }
?>
