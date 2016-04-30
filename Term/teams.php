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

<table>
    <?php
    include 'common.php';
    $conn = getdataconnection();
    createtablehead();
    $team = "Atlanta Hawks";
    $sql = $conn->query("SELECT * FROM teamstats WHERE team = '$team'");

    foreach($sql as $row){
    echo "<tr><td>";
    echo $row['Player'];
    echo "</td><td>";
    echo $row['Team'];
    echo "</td><td>";
    echo $row['Pts'];
    echo "</td></tr>";
    }
    ?>
</table>
<br>

<?php include '/footer.html' ?>
