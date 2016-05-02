<?php include '/header.html' ?>
<div class="row">
    <div class="col-12">
<form method="post" action="teams.php">
    <div class='contains'>
    <div class='round'><button type="submit" name="gogo" value="Philadelphia 76ers"><img src="Logos/76ers.png" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="Portland Trail Blazers"><img src="Logos/Blazers.png" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="Milwaukee Bucks"><img src="Logos/Bucks.png" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="Chicago Bulls"><img src="Logos/Bulls.png" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="Cleveland Cavaliers"><img src="Logos/Cavaliers.png" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="Boston Celtics"><img src="Logos/Celtics.png" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="Los Angeles Clippers"><img src="Logos/Clippers.jpg" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="Memphis Grizzlies"><img src="Logos/Grizzlies.png" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="Atlanta Hawks"><img src="Logos/Hawks.jpg" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="Miami Heat"><img src="Logos/Heat.jpg" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="Charlotte Hornets"><img src="Logos/Hornets.jpg" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="Utah Jazz"><img src="Logos/Jazz.png" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="Sacramento Kings"><img src="Logos/Kings.jpg" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="New York Knicks"><img src="Logos/Knicks.png" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="Los Angeles Lakers"><img src="Logos/Lakers.png" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="Orlando Magic"><img src="Logos/Magic.jpg" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="Dallas Mavericks"><img src="Logos/Mavericks.png" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="Brooklyn Nets"><img src="Logos/Nets.png" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="Denver Nuggets"><img src="Logos/Nuggets.jpg" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="Indiana Pacers"><img src="Logos/Pacers.png" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="New Orleans Pelicans"><img src="Logos/Pelicans.png" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="Detroit Pistons"><img src="Logos/Pistons.png" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="Toronto Raptors"><img src="Logos/Raptors.png" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="San Antonio Spurs"><img src="Logos/Spurs.jpg" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="Phoenix Suns"><img src="Logos/Suns.jpg" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="Oklahoma City Thunder"><img src="Logos/Thunder.png" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="Minnesota Timberwolves"><img src="Logos/Timberwolves.png" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="Golden State Warriors"><img src="Logos/Warriors.jpg" width="120" height="120"></button></div>
    <div class='round'><button type="submit" name="gogo" value="Washington Wizards"><img src="Logos/Wizards.jpg" width="120" height="120"></button></div>
    </div>
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
    if(isset($_POST['gogo'])):
        $team = $_POST['gogo'];
    else:
        $team = "Atlanta Hawks";
    endif;
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
    echo "</tr>";
    }
    ?>
</table>
    </div>
</div>
<br>

<div class="row">
    <div class="col-12 playertable">
            <table>
                <?php
                    createtablehead();
                    $sql = $conn->query("SELECT playerstats.Player,playerstats.Team,playerstats.Age,playerstats.GP,playerstats.W,playerstats.L,playerstats.MIN,playerstats.FGM,playerstats.FGA,playerstats.`FG%`,playerstats.3PM,playerstats.3PA,playerstats.`3P%`,playerstats.FTM,playerstats.FTA,playerstats.`FT%`,playerstats.FTM,playerstats.FTA,playerstats.`FT%`,playerstats.REB,playerstats.AST,playerstats.TOV,playerstats.STL,playerstats.BLK,playerstats.PTS,playerstats.DD2,playerstats.TD3 FROM playerstats WHERE playerstats.TEAM='$team'");
                    foreach($sql as $row){
                        echo "<tr><td>";
                        echo $row['Player'];
                        echo "</td><td>";
                        echo $row['Team'];
                        echo "</td><td>";
                        echo $row['Age'];
                        echo "</td><td>";
                        echo $row['GP'];
                        echo "</td><td>";
                        echo $row['W'];
                        echo "</td><td>";
                        echo $row['L'];
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
                        echo $row['PTS'];
                        echo "</td><td>";
                        echo $row['DD2'];
                        echo "</td><td>";
                        echo $row['TD3'];
                        echo "</td></tr>";
                    }
                ?>
            </table>
    </div>
</div>
<br>

<?php include '/footer.html' ?>
