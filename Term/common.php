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
        echo "<td>Age</td>";
        echo "<td>GP</td>";
        echo "<td>W</td>";
        echo "<td>L</td>";
        echo "<td>Min</td>";
        echo "<td>FGM</td>";
        echo "<td>FGA</td>";
        echo "<td>FG%</td>";
        echo "<td>3PM</td>";
        echo "<td>3PA</td>";
        echo "<td>3P%</td>";
        echo "<td>FTM</td>";
        echo "<td>FTA</td>";
        echo "<td>FT%</td>";
        echo "<td>REB</td>";
        echo "<td>AST</td>";
        echo "<td>TOV</td>";
        echo "<td>STL</td>";
        echo "<td>BLK</td>";
        echo "<td>PTS</td>";
        echo "<td>DD2</td>";
        echo "<td>TD3</td>";
        echo "</tr>";
    }
?>
