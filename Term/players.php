<?php include 'header.html' ?>
<div class="row">
    <div class="col-12 playertable">
            <table>
                <?php
                    include 'common.php';
                    $conn = getdataconnection();
                    createtablehead();
                    $sql = $conn->query("SELECT playerstats.Player,playerstats.Team,playerstats.Games,playerstats.Min,playerstats.Pts,playerstats.Reb,playerstats.Ast,playerstats.Stl,playerstats.Blk,playerstats.TO,playerstats.FGM,playerstats.FGA,playerstats.`FG%`,playerstats.3PTM,playerstats.3PTA,playerstats.`3PT%`,playerstats.FTM,playerstats.FTA,playerstats.`FT%` FROM playerstats ORDER BY playerstats.Pts DESC");
                    foreach($sql as $row){
                        echo "<tr><td>";
                        echo $row['Player'];
                        echo "</td><td>";
                        echo $row['Team'];
                        echo "</td><td>";
                        echo $row['Games'];
                        echo "</td><td>";
                        echo $row['Min'];
                        echo "</td><td>";
                        echo $row['Pts'];
                        echo "</td><td>";
                        echo $row['Reb'];
                        echo "</td><td>";
                        echo $row['Ast'];
                        echo "</td><td>";
                        echo $row['Stl'];
                        echo "</td><td>";
                        echo $row['Blk'];
                        echo "</td><td>";
                        echo $row['TO'];
                        echo "</td><td>";
                        echo $row['FGM'];
                        echo "</td><td>";
                        echo $row['FGA'];
                        echo "</td><td>";
                        echo $row['FG%'];
                        echo "</td><td>";
                        echo $row['3PTM'];
                        echo "</td><td>";
                        echo $row['3PTA'];
                        echo "</td><td>";
                        echo $row['3PT%'];
                        echo "</td><td>";
                        echo $row['FTM'];
                        echo "</td><td>";
                        echo $row['FTA'];
                        echo "</td><td>";
                        echo $row['FT%'];
                        echo "</td></tr>";
                    }
                ?>
            </table>
    </div>
</div>
    <?php include 'footer.html' ?>
