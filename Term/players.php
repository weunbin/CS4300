<?php include 'header.html' ?>
<div class="row">
    <div class="col-12 playertable">
            <table>
                <?php
                    include 'common.php';
                    $conn = getdataconnection();
                    createtablehead();
                    $sql = $conn->query("SELECT playerstats.Player,playerstats.Team,playerstats.Age,playerstats.GP,playerstats.W,playerstats.L,playerstats.MIN,playerstats.FGM,playerstats.FGA,playerstats.`FG%`,playerstats.3PM,playerstats.3PA,playerstats.`3P%`,playerstats.FTM,playerstats.FTA,playerstats.`FT%`,playerstats.REB,playerstats.AST,playerstats.TOV,playerstats.STL,playerstats.BLK,playerstats.PTS,playerstats.DD2,playerstats.TD3 FROM playerstats ORDER BY playerstats.Pts DESC");
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
    <?php include 'footer.html' ?>
