<?php
    function getdataconnection(){
        $username ="root";
        $password ="";
        $conn = new PDO('mysql:host=localhost;dbname=nba', $username, $password);
        return $conn;
    }

    function createtableheadteam(){
        echo "<tr>";
        echo "<td>Team</td>";
        echo "<td>GP</td>";
        echo "<td>W</td>";
        echo "<td>L</td>";
        echo "<td>W%</td>";
        echo "<td>MIN</td>";
        echo "<td>FGM</td>";
        echo "<td>FGA</td>";
        echo "<td>FG%</td>";
        echo "<td>3PM</td>";
        echo "<td>3PA</td>";
        echo "<td>3P%</td>";
        echo "<td>FTM</td>";
        echo "<td>FTA</td>";
        echo "<td>FT%</td>";
        echo "<td>OREB</td>";
        echo "<td>DREB</td>";
        echo "<td>REB</td>";
        echo "<td>AST</td>";
        echo "<td>TOV</td>";
        echo "<td>STL</td>";
        echo "<td>BLK</td>";
        echo "<td>BLKA</td>";
        echo "<td>PF</td>";
        echo "<td>PFD</td>";
        echo "<td>PTS</td>";
        echo "<td>Plus/Minus</td>";
        echo "</tr>";
    }
?>

