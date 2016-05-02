<?php include 'header.html' ?>

<body>
    <div id="comparePlayers">
        <?php
        include 'common.php';
        $conn = getdataconnection();
        $player1name = $_GET["name"];
        $player2name = $_GET["name2"];
        $p1 = false;
        $p2 = false;
        if($player1name == null){
            $p1 = true;
        }
        if($player2name == null){
            $p2 = true;
        }
        $pimg1;
        $img1 = $conn->query("SELECT Team FROM playerstats WHERE Player ='".$player1name."'");
        foreach($img1 as $row){
            $pimg1 = $row['Team'].".png";
        }
        $pimg2;
        $img2 = $conn->query("SELECT Team FROM playerstats WHERE Player ='".$player2name."'");
        foreach($img2 as $row){
            $pimg2 = $row['Team'].".png";
        }
        
        $comp1 = $conn->query("SELECT * FROM playerstats WHERE Player ='".$player1name."'");
        $min; 
        $fgm;
        $fga;
        $fgp;
        $tpm;
        $tpa;
        $tpp;
        $ftm;
        $fta;
        $ftp;
        $reb;
        $ast;
        $tov;
        $stl;
        $blk;
        $pts;
        $cmp1 = false;
        $cmp2 = false;
        $minB = true; 
        $fgmB = true;
        $fgaB = true;
        $fgpB = true;
        $tpmB = true;
        $tpaB = true;
        $tppB = true;
        $ftmB = true;
        $ftaB = true;
        $ftpB = true;
        $rebB = true;
        $astB = true;
        $tovB = true;
        $stlB = true;
        $blkB = true;
        $ptsB = true;

        foreach($comp1 as $row){
            $min = $row['MIN'];
            $fgm = $row['FGM'];
            $fga = $row['FGA'];
            $fgp = $row['FG%'];
            $tpm = $row['3PM'];
            $tpa = $row['3PA'];
            $tpp = $row['3P%'];
            $ftm = $row['FTM'];
            $fta = $row['FTA'];
            $ftp = $row['FT%'];
            $reb = $row['REB'];
            $ast = $row['AST'];
            $tov = $row['TOV'];
            $stl = $row['STL'];
            $blk = $row['BLK'];
            $pts = $row['PTS'];
            $cmp1 = true;
        }

        $comp2 = $conn->query("SELECT * FROM playerstats WHERE Player ='".$player2name."'");
        if($cmp1){
        foreach($comp2 as $row){
            if($min >= $row['MIN']){
                $min = $row['MIN'];
                $minB = false;
            }
            if($fgm >= $row['FGM']){
                $fgm = $row['FGM'];
                $fgmB = false;
            }
            if($fga >= $row['FGA']){
                $fga = $row['FGA'];
                $fgaB = false;
            }
            if($fgp >= $row['FG%']){
                $fgp = $row['FG%'];
                $fgpB = false;
            }
            if($tpm >= $row['3PM']){
                $tpm = $row['3PM'];
                $tpmB = false;
            }
            if($tpa >= $row['3PA']){
                $tpa = $row['3PA'];
                $tpaB = false;
            }
            if($tpp >= $row['3P%']){
                $tpp = $row['3P%'];
                $tppB = false;
            }
            if($ftm >= $row['FTM']){
                $ftm = $row['FTM'];
                $ftmB = false;
            }
            if($fta >= $row['FTA']){
                $fta = $row['FTA'];
                $ftaB = false;
            }
            if($ftp >= $row['FT%']){
                $ftp = $row['FT%'];
                $ftpB = false;
            }
            if($reb >= $row['REB']){
                $reb = $row['REB'];
                $rebB = false;
            }
            if($ast >= $row['AST']){
                $ast = $row['AST'];
                $astB = false;
            }
            if($tov >= $row['TOV']){
                $tov = $row['TOV'];
                $tovB = false;
            }
            if($stl >= $row['STL']){
                $stl = $row['STL'];
                $stlB = false;
            }
            if($blk >= $row['BLK']){
                $blk = $row['BLK'];
                $blkB = false;
            }
            if($pts >= $row['PTS']){
                $pts = $row['PTS'];
                $ptsB = false;
            }
            $cmp2 = true;
        }
        }

        ?>
        <div id="img1">
        <?php
            if(!$p1 && !$p2 && $cmp1 && $cmp2){
                echo "<img src='Team/".$pimg1."' height = '125' width = '125'/>";
            }
            ?>
        </div>
        <div id ="player1">
            
            <?php
            if(!$p1 && !$p2 && $cmp1 && $cmp2){
            echo "<font size='5' face='Arial'>";
            echo $_GET["name"];

            $sql = $conn->query("SELECT Team, GP, W, L FROM playerstats WHERE Player ='".$player1name."'");
            echo "<font size='3' face='Arial'>";
            foreach($sql as $row){
                echo "<br/>";
                echo $row['Team'];
                echo "<br/>";
                echo "Games Played: ";
                echo $row['GP'];
                echo "<br/>";
                echo "W: ";
                echo $row['W'];
                echo " / L: ";
                echo $row['L'];
            }
            }
            ?>

        </div>
        <div id ="playerTable1">
            <table class ="playerTables">
             <?php
                if(!$p1 && !$p2 && $cmp1 && $cmp2){
                    echo "<tr>";
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
                    echo "<td>REB</td>";
                    echo "<td>AST</td>";
                    echo "<td>TOV</td>";
                    echo "<td>STL</td>";
                    echo "<td>BLK</td>";
                    echo "<td>PTS</td>";
                    echo "</tr>";
               
                $sql1 = $conn->query("SELECT * FROM playerstats WHERE Player ='".$player1name."'");
                foreach($sql1 as $row){
                    if(!$minB){
                    echo "</tr><td bgcolor='#00ff00'>";
                    echo $row['MIN'];
                    }else{
                        echo "</tr><td>";
                        echo $row['MIN'];
                    }
                    if(!$fgmB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['FGM'];
                    }else{
                        echo "</td><td>";
                        echo $row['FGM'];
                    }
                    if(!$fgaB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['FGA'];
                    }else{
                        echo "</td><td>";
                        echo $row['FGA'];
                    }
                    if(!$fgpB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['FG%'];
                    }else{
                        echo "</td><td>";
                        echo $row['FG%'];
                    }
                    if(!$tpmB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['3PM'];
                    }else{
                        echo "</td><td>";
                        echo $row['3PM'];
                    }
                    if(!$tpaB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['3PA'];
                    }else{
                        echo "</td><td>";
                        echo $row['3PA'];
                    }
                    if(!$tppB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['3P%'];
                    }else{
                        echo "</td><td>";
                        echo $row['3P%'];
                    }
                    if(!$ftmB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['FTM'];
                    }else{
                        echo "</td><td>";
                        echo $row['FTM'];
                    }
                    if(!$ftaB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['FTA'];
                    }else{
                        echo "</td><td>";
                        echo $row['FTA'];
                    }
                    if(!$ftpB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['FT%'];
                    }else{
                        echo "</td><td>";
                        echo $row['FT%'];
                    }
                    if(!$rebB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['REB'];
                    }else{
                        echo "</td><td>";
                        echo $row['REB'];
                    }
                    if(!$astB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['AST'];
                    }else{
                        echo "</td><td>";
                        echo $row['AST'];
                    }
                    if(!$tovB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['TOV'];
                    }else{
                        echo "</td><td>";
                        echo $row['TOV'];
                    }
                    if(!$stlB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['STL'];
                    }else{
                        echo "</td><td>";
                        echo $row['STL'];
                    }
                    if(!$blkB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['BLK'];
                    }else{
                        echo "</td><td>";
                        echo $row['BLK'];
                    }
                    if(!$ptsB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['PTS'];
                    }else{
                        echo "</td><td>";
                        echo $row['PTS'];
                    }
                    echo "</td></tr>";
                }
                }
                ?>
            </table>
        </div>
        <div>

        </div>
        <div id="img2">
        <?php
            if(!$p1 && !$p2 && $cmp1 && $cmp2)
            echo "<img src='Team/".$pimg2."' height = '125' width = '125'/>";
            ?>
        </div>
        <div id ="player2">
            <?php
            if(!$p1 && !$p2 && $cmp1 && $cmp2){
            echo "<font size='5' face='Arial'>";
            echo $_GET["name2"];

            $sql10 = $conn->query("SELECT Team, GP, W, L FROM playerstats WHERE Player ='".$player2name."'");
            echo "<font size='3' face='Arial'>";
            foreach($sql10 as $row){
                echo "<br/>";
                echo $row['Team'];
                echo "<br/>";
                echo "Games Played: ";
                echo $row['GP'];
                echo "<br/>";
                echo "W: ";
                echo $row['W'];
                echo " / L: ";
                echo $row['L'];
            }
            }
            ?>
        </div>
        <div id ="playerTable2">
            <table class ="playerTables">
            <?php
                if(!$p1 && !$p2 && $cmp1 && $cmp2){
                    echo "<tr>";
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
                    echo "<td>REB</td>";
                    echo "<td>AST</td>";
                    echo "<td>TOV</td>";
                    echo "<td>STL</td>";
                    echo "<td>BLK</td>";
                    echo "<td>PTS</td>";
                    echo "</tr>";
                $sql4 = $conn->query("SELECT * FROM playerstats WHERE Player ='".$player2name."'");
                foreach($sql4 as $row){
                    if($minB){
                    echo "</tr><td bgcolor='#00ff00'>";
                    echo $row['MIN'];
                    }else{
                        echo "</tr><td>";
                        echo $row['MIN'];
                    }
                    if($fgmB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['FGM'];
                    }else{
                        echo "</td><td>";
                        echo $row['FGM'];
                    }
                    if($fgaB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['FGA'];
                    }else{
                        echo "</td><td>";
                        echo $row['FGA'];
                    }
                    if($fgpB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['FG%'];
                    }else{
                        echo "</td><td>";
                        echo $row['FG%'];
                    }
                    if($tpmB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['3PM'];
                    }else{
                        echo "</td><td>";
                        echo $row['3PM'];
                    }
                    if($tpaB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['3PA'];
                    }else{
                        echo "</td><td>";
                        echo $row['3PA'];
                    }
                    if($tppB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['3P%'];
                    }else{
                        echo "</td><td>";
                        echo $row['3P%'];
                    }
                    if($ftmB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['FTM'];
                    }else{
                        echo "</td><td>";
                        echo $row['FTM'];
                    }
                    if($ftaB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['FTA'];
                    }else{
                        echo "</td><td>";
                        echo $row['FTA'];
                    }
                    if($ftpB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['FT%'];
                    }else{
                        echo "</td><td>";
                        echo $row['FT%'];
                    }
                    if($rebB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['REB'];
                    }else{
                        echo "</td><td>";
                        echo $row['REB'];
                    }
                    if($astB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['AST'];
                    }else{
                        echo "</td><td>";
                        echo $row['AST'];
                    }
                    if($tovB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['TOV'];
                    }else{
                        echo "</td><td>";
                        echo $row['TOV'];
                    }
                    if($stlB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['STL'];
                    }else{
                        echo "</td><td>";
                        echo $row['STL'];
                    }
                    if($blkB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['BLK'];
                    }else{
                        echo "</td><td>";
                        echo $row['BLK'];
                    }
                    if($ptsB){
                    echo "</td><td bgcolor='#00ff00'>";
                    echo $row['PTS'];
                    }else{
                        echo "</td><td>";
                        echo $row['PTS'];
                    }
                    echo "</td></tr>";
                }
                }
                ?>
            </table>
            <?php
            if(!$p1 && !$p2 && $cmp1 && $cmp2){
            }else{
                    echo "<font size='15' face='Arial'>";
                    echo "Please Enter Two Correct Player Names!";
                    echo "<form action='comparison.php' method='get'>";
                    echo "<div>";
                    echo "<input type='submit' value='Go back'/>";
                    echo "</div>";
                    echo "</form>";
                }
            ?>
        </div>
    </div>
    <div id ="compareAgain">
            <?php
                if(!$p1 && !$p2 && $cmp2 && $cmp1){
                echo "<form action='comparison.php' method='get'>";
                echo "<div>";
                echo "<input type='submit' value='Compare Other Players'/>";
                echo "</div>";
                echo "</form>";
                }
            ?>
        </div>
</body>