<?php include 'top.html';?>
<?php 
	$singles="singles.txt";
    
    $list = file_get_contents($singles);
    $list = trim($list);
    $arr = preg_split("/\r\n|\n|\r/", $list);
    $name = $_GET["name"];
    $person = null;
    $match1 = null;
    $match2 = null;
    $match3 = null;
    $match4 = null;
    for ($i = 0; $i < count($arr); $i++) {
        $temp = explode(",", $arr[$i]);
        if (strcmp($name, $temp[0]) == 0) {
            $person = $temp;
        }
    }
    if (is_null($person) || strcmp("", $person[0]) == 0) {
        echo "<p><strong>Error! Invalid data.</strong><p>We're sorry. You submitted invalid
        user information. Please go back and try again.";
    } else {
        echo "<p><strong>Matches for ".$name."</strong><p>";
        if (strcmp($person[1], "M") == 0) {
            $index = 0;
            for ($i = 0; $i < count($arr); $i++) {
                $temp = explode(",", $arr[$i]);
                if (strcmp("F", $temp[1]) == 0) {
                    $match1[$index] = $temp;
                    $index++;
                }
            }
        } else {
            $index = 0;
            for ($i = 0; $i < count($arr); $i++) {
                $temp = explode(",", $arr[$i]);
                if (strcmp("M", $temp[1]) == 0) {
                    $match1[$index] = $arr[$i];
                    $index++;
                }
            }
        }
        if (is_null($match1)) {
            echo "Sorry. No matches for ".$name.".";
        } else {
            $index = 0;
            for ($i = 0; $i < count($match1); $i++) {
                $temp = explode(",", $match1[$i]);
                if (intval($person[5]) <= intval($temp[2]) && intval($person[6]) >= intval($temp[2])) {
                    $match2[$index] = $match1[$i];
                    $index++;
                }
            }
            if (is_null($match2)) {
                echo "Sorry. No matches for ".$name.".";
            } else {
                $index = 0;
                for ($i = 0; $i < count($match2); $i++) {
                    $temp = explode(",", $match2[$i]);
                    if (strcmp($temp[4], $person[4]) == 0) {
                        $match3[$index] = $match2[$i];
                        $index++;
                    }
                }
                if (is_null($match3)) {
                    echo "Sorry. No matches for ".$name.".";
                } else {
                    $index = 0;
                    for ($i = 0; $i < count($match3); $i++) {
                        $same = 0;
                        $temp = explode(",", $match3[$i]);
                        for ($j = 0; $j < 4; $j++) {
                            if (strcmp($person[3][0], $temp[3][$j]) == 0) {
                                $same++;
                            }
                            if (strcmp($person[3][1], $temp[3][$j]) == 0) {
                                $same++;
                            }
                            if (strcmp($person[3][2], $temp[3][$j]) == 0) {
                                $same++;
                            }
                            if (strcmp($person[3][3], $temp[3][$j]) == 0) {
                                $same++;
                            }
                        }
                        if ($same > 0) {
                            $match4[$index] = $match3[$i];
                            $index++;
                        }
                    }
                    if (is_null($match4)) {
                        echo "Sorry. No matches for ".$name.".";
                    } else {
                        for ($i = 0; $i < count($match4); $i++) {
                            $temp = explode(",", $match4[$i]);
                            echo "<div>";
                            echo "<div style=\"float: left;\"><img src=\"user.jpg\" alt=\"user picture\" /></div>";
                            echo "<div style=\"float: left;\"><fieldset>".$temp[0]."<p>";
                            echo "<ul>";
                            echo "<strong>gender:</strong><li>".$temp[1]."</li>";
                            echo "<strong>age:</strong><li>".$temp[2]."</li>";
                            echo "<strong>type:</strong><li>".$temp[3]."</li>";
                            echo "<strong>OS:</strong><li>".$temp[4]."</li></div></div></ul></fieldset>";
                            
                        }
                    }
                }
            }
        }
    }
 ?>
        
<?php include 'bottom.html' ?>
