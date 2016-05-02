<?php include 'header.html' ?>
<div class="row">
    <div class="col-12 playertable">
            <table id ="ptable">
                <?php
                    include 'common.php';
                    $conn = getdataconnection();
                    $field = "playerstats.Pts ";
                    $sort = "DESC";
                    if(isset($_GET['sorting'])) {
                        if($_GET['sorting']=='ASC') {
                            $sort='DESC';
                        } else {
                            $sort='ASC';
                        }
                    }
                    if (isset($_GET['field'])) {
                        if($_GET['field']=='Age') {
                            $field = "playerstats.Age "; 
                        } elseif($_GET['field']=='Player') {
                            $field = "playerstats.Player ";
                        } elseif($_GET['field']=='Team') {
                            $field = "playerstats.Team ";
                        } elseif($_GET['field']=='GP') {
                            $field = "playerstats.GP ";
                        } elseif($_GET['field']=='W') {
                            $field="playerstats.W ";
                        } elseif($_GET['field']=='L') {
                            $field="playerstats.L ";
                        } elseif($_GET['field']=='MIN') {
                            $field="playerstats.MIN ";
                        } elseif($_GET['field']=='FGM') {
                            $field="playerstats.FGM ";
                        } elseif($_GET['field']=='FGA') {
                            $field="playerstats.FGA ";
                        } elseif($_GET['field']=='FG%') {
                            $field="playerstats.`FG%` ";
                        } elseif($_GET['field']=='3PM') {
                            $field="playerstats.3PM ";
                        } elseif($_GET['field']=='3PA') {
                            $field="playerstats.3PA ";
                        } elseif($_GET['field']=='3P%') {
                            $field="playerstats.`3P%` ";
                        } elseif($_GET['field']=='FTM') {
                            $field="playerstats.FTM ";
                        } elseif($_GET['field']=='FTA') {
                            $field="playerstats.FTA ";
                        } elseif($_GET['field']=='WFT%') {
                            $field="playerstats.`FT%` ";
                        } elseif($_GET['field']=='REB') {
                            $field="playerstats.REB ";
                        } elseif($_GET['field']=='AST') {
                            $field="playerstats.AST ";
                        } elseif($_GET['field']=='TOV') {
                            $field="playerstats.TOV ";
                        } elseif($_GET['field']=='STL') {
                            $field="playerstats.STL ";
                        } elseif($_GET['field']=='BLK') {
                            $field="playerstats.BLK ";
                        } elseif($_GET['field']=='PTS') {
                            $field="playerstats.PTS ";
                        } elseif($_GET['field']=='DD2') {
                            $field="playerstats.DD2 ";
                        } elseif($_GET['field']=='TD3') {
                            $field="playerstats.TD3 ";
                        }
                    }
                    $sql = $conn->query("SELECT playerstats.Player,playerstats.Team,playerstats.Age,playerstats.GP,playerstats.W,playerstats.L,playerstats.MIN,playerstats.FGM,playerstats.FGA,playerstats.`FG%`,playerstats.3PM,playerstats.3PA,playerstats.`3P%`,playerstats.FTM,playerstats.FTA,playerstats.`FT%`,playerstats.REB,playerstats.AST,playerstats.TOV,playerstats.STL,playerstats.BLK,playerstats.PTS,playerstats.DD2,playerstats.TD3 FROM playerstats ORDER BY ".$field.$sort);
                             
                    echo '<th><a href="players.php?sorting='.$sort.'&field=Player#ptable">Player</a></th>';
                    echo '<th><a href="players.php?sorting='.$sort.'&field=Team#ptable">Team</a></th>';
                    echo '<th><a href="players.php?sorting='.$sort.'&field=Age#ptable">Age</a></th>';
                    echo '<th><a href="players.php?sorting='.$sort.'&field=GP#ptable">GP</a></th>';
                    echo '<th><a href="players.php?sorting='.$sort.'&field=W#ptable">W</a></th>';
                    echo '<th><a href="players.php?sorting='.$sort.'&field=L#ptable">L</a></th>';
                    echo '<th><a href="players.php?sorting='.$sort.'&field=MIN#ptable">Min</a></th>';
                    echo '<th><a href="players.php?sorting='.$sort.'&field=FGM#ptable">FGM</a></th>';
                    echo '<th><a href="players.php?sorting='.$sort.'&field=FGA#ptable">FGA</a></th>';
                    echo '<th><a href="players.php?sorting='.$sort.'&field=FG%#ptable">FG%</a></th>';
                    echo '<th><a href="players.php?sorting='.$sort.'&field=3PM#ptable">3PM</a></th>';
                    echo '<th><a href="players.php?sorting='.$sort.'&field=3PA#ptable">3PA</a></th>';
                    echo '<th><a href="players.php?sorting='.$sort.'&field=3P%#ptable">3P%</a></th>';
                    echo '<th><a href="players.php?sorting='.$sort.'&field=FTM#ptable">FTM</a></th>';
                    echo '<th><a href="players.php?sorting='.$sort.'&field=FTA#ptable">FTA</a></th>';
                    echo '<th><a href="players.php?sorting='.$sort.'&field=FT%#ptable">FT%</a></th>';
                    echo '<th><a href="players.php?sorting='.$sort.'&field=REB#ptable">REB</a></th>';
                    echo '<th><a href="players.php?sorting='.$sort.'&field=AST#ptable">AST</a></th>';
                    echo '<th><a href="players.php?sorting='.$sort.'&field=TOV#ptable">TOV</a></th>';
                    echo '<th><a href="players.php?sorting='.$sort.'&field=STL#ptable">STL</a></th>';
                    echo '<th><a href="players.php?sorting='.$sort.'&field=BLK#ptable">BLK</a></th>';
                    echo '<th><a href="players.php?sorting='.$sort.'&field=PTS#ptable">PTS</a></th>';
                    echo '<th><a href="players.php?sorting='.$sort.'&field=DD2#ptable">DD2</a></th>';
                    echo '<th><a href="players.php?sorting='.$sort.'&field=TD3#ptable">TD3</a></th>';
                    foreach($sql as $row) {
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
