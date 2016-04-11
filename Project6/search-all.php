<!doctype html>
<html>
    <head>
        <title>Search All</title>
        <meta charset="utf-8" />
        <link href="bacon.css" type="text/css" rel="stylesheet" />

    </head>
    <body>
        <div>
            <div id="banner">My Movie Database</div>
            <div id ="body">
                <h1>
                    Results for 
                    <?php
                    echo $_GET["firstname"]." ".$_GET["lastname"];
                    ?>
                </h1>
                <div id="title">
                    Films with 
                    <?php
                    echo $_GET["firstname"]." ".$_GET["lastname"];
                    ?>
                </div>
                <table>
                    <tr>
                        <td>#</td>
                        <td>Title</td>
                        <td>Year</td>
                    </tr>
                    <?php
                    $username ="root";
                    $password ="";
                    $conn = new PDO('mysql:host=localhost;dbname=imdb_small', $username, $password);
                    
                    $getActor = "SELECT ";
                    
                    
                    $id = null;
                    
                    foreach($conn->query($getActor) as $row){
                        $id = $row['id'];
                    }
                    $sql = "SELECT m.name, m.year ";
                    $sql.= "FROM movies m ";
                    $sql.= "JOIN roles r ON r.movie_id = m.id ";
                    $sql.= "JOIN actors a ON r.actor_id = a.id ";
                    $sql.= "WHERE (r.actor_id='".$id."') ";
                    $sql.= "ORDER BY m.year DESC, m.name ASC";
                    $i = 0;
                    //Prints every movie result
                    foreach($conn->query($sql) as $row){
                        echo "<tr><td class=\"index\">";
                        echo $i+1;
                        echo "</td><td class=\"title\">";
                        echo $row['name'];
                        echo "</td><td class=\"year\">";
                        echo $row['year'];
                        echo "</td></tr>";
                        $i++;
                    }
                    //close the connection
                    $conn = null;
                    ?>
                </table>
            </div>    

        </div>
    </body>
</html>