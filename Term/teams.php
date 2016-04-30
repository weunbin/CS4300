<?php include '/header.html' ?>
<div class="row">
    <div class="col-12">
<form action="teams.php">
    <input type="image" src="Logos/76ers.png" width="120" height="120">
    <input type="image" src="Logos/Blazers.png" width="120" height="120">
    <input type="image" src="Logos/Bucks.png" width="120" height="120">
    <input type="image" src="Logos/Bulls.png" width="120" height="120">
    <input type="image" src="Logos/Cavaliers.png" width="120" height="120">
    <input type="image" src="Logos/Celtics.png" width="120" height="120">
    <input type="image" src="Logos/Clippers.jpg" width="120" height="120">
    <input type="image" src="Logos/Grizzlies.png" width="120" height="120">
    <input type="image" src="Logos/Hawks.jpg" width="120" height="120">
    <input type="image" src="Logos/Heat.jpg" width="120" height="120">
    <input type="image" src="Logos/Hornets.jpg" width="120" height="120">
    <input type="image" src="Logos/Jazz.png" width="120" height="120">
    <input type="image" src="Logos/Kings.jpg" width="120" height="120">
    <input type="image" src="Logos/Knicks.png" width="120" height="120">
    <input type="image" src="Logos/Lakers.png" width="120" height="120">
    <input type="image" src="Logos/Magic.jpg" width="120" height="120">
    <input type="image" src="Logos/Mavericks.png" width="120" height="120">
    <input type="image" src="Logos/Nets.png" width="120" height="120">
    <input type="image" src="Logos/Nuggets.jpg" width="120" height="120">
    <input type="image" src="Logos/Pacers.png" width="120" height="120">
    <input type="image" src="Logos/Pelicans.png" width="120" height="120">
    <input type="image" src="Logos/Pistons.png" width="120" height="120">
    <input type="image" src="Logos/Raptors.png" width="120" height="120">
    <input type="image" src="Logos/Rockets.png" width="120" height="120">
    <input type="image" src="Logos/Spurs.jpg" width="120" height="120">
    <input type="image" src="Logos/Suns.jpg" width="120" height="120">
    <input type="image" src="Logos/Thunder.png" width="120" height="120">
    <input type="image" src="Logos/Timberwolves.png" width="120" height="120">
    <input type="image" src="Logos/Warriors.jpg" width="120" height="120">
    <input type="image" src="Logos/Wizards.jpg" width="120" height="120">

</form>
</div>
</div>

<div class="row">
    <div class="col-12">
<table>
    <?php
    include 'common.php';
    $conn = getdataconnection();
    createtableheadteam();
    $team = "Atlanta Hawks";
    $sql = $conn->query("SELECT * FROM teamstats WHERE team = '$team'");

    foreach($sql as $row){
    echo "<tr><td>";
    echo $row['Team'];
    echo "</td><td>";
    echo $row['GP'];
    echo "</td><td>";
    echo $row['W'];
    echo "</td><td>";
    echo $row['L'];
    echo "</td><td>";
    echo $row['W%'];
    echo "</td><td>";
    echo $row['MIN'];
    echo "</td><td>";
    echo $row['FGM'];
    echo "</td><td>";
    echo $row['FGA'];
    echo "</td><td>";
    echo $row['FG%'];
    echo "</td><td>";
    echo $row['3PM'];
    echo "</td><td>";
    echo $row['3PA'];
    echo "</td><td>";
    echo $row['3P%'];
    echo "</td><td>";
    echo $row['FTM'];
    echo "</td><td>";
    echo $row['FTA'];
    echo "</td><td>";
    echo $row['FT%'];
    echo "</td><td>";
    echo $row['OREB'];
    echo "</td><td>";
    echo $row['DREB'];
    echo "</td><td>";
    echo $row['REB'];
    echo "</td><td>";
    echo $row['AST'];
    echo "</td><td>";
    echo $row['TOV'];
    echo "</td><td>";
    echo $row['STL'];
    echo "</td><td>";
    echo $row['BLK'];
    echo "</td><td>";
    echo $row['BLKA'];
    echo "</td><td>";
    echo $row['PF'];
    echo "</td><td>";
    echo $row['PFD'];
    echo "</td><td>";
    echo $row['PTS'];
    echo "</td><td>";
    echo $row['PLUS/MINUS'];
    echo "</td></tr>";
    }
    ?>
</table>
    </div>
</div>
<br>

<?php include '/footer.html' ?>
