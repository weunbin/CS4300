<!doctype html>
<html>
    <head>
        <title>Search Kevin</title>
        <meta charset="utf-8" />
        <link href="bacon.css" type="text/css" rel="stylesheet" />

    </head>
    <body>
        <div id = "frame">
            <div id="banner">
				<a href="index.php"><img src="mymdb.png" alt="banner logo" /></a>
				My Movie Database
			</div>
            <div id ="main">
                <h1>
                    Results for 
                    <?php
                    echo $_GET["firstname"]." ".$_GET["lastname"];
                    ?>
                </h1>
                <div id="title">
                    Films with 
                    <?php
                    echo $_GET["firstname"]." ".$_GET["lastname"]." and Kevin Bacon";
                    ?>
                </div>
                <table>
                    <?php
                    include 'common.php';
                    $conn = getdataconnection();
                    $fname = $_GET["firstname"];
                    $lname = $_GET["lastname"];
                    $id_actor = getactorid($fname, $lname);
                    $kfname ="Kevin";
                    $klname ="Bacon";
                    $kevin_id = $conn->query("SELECT id FROM actors a WHERE a.first_name = '".$kfname."' AND a.last_name = '".$klname."'");
                    
                    foreach($kevin_id as $id)
                        $kevin_id = $id['id'];
                    
                    foreach($id_actor as $id)
                        $actor_id = $id['id'];
                    
                    if(isset($actor_id)){
                        $sql = $conn->query("SELECT movie.year, movie.name FROM movies movie JOIN roles role1 ON role1.movie_id = movie.id JOIN actors actor1 ON role1.actor_id = actor1.id JOIN roles role2 ON role2.movie_id = movie.id JOIN actors actor2 ON role2.actor_id = actor2.id WHERE role1.movie_id = role2.movie_id AND role1.actor_id = '".$actor_id."' AND role2.actor_id = '".$kevin_id."' ORDER BY movie.year DESC, movie.name ASC");

                        $row_num = 0;

                        if($sql->rowCount() < 1){
                            echo $fname, ' ', $lname, ' wasn`t in any films with Kevin Bacon.';
                        } else {
                            createtablehead();

                            foreach($sql as $row){
                                echo "<tr><td>";
                                echo $row_num+1;
                                echo "</td><td>";
                                echo $row['name'];
                                echo "</td><td>";
                                echo $row['year'];
                                echo "</td></tr>";
                                $row_num++;
                            }
                        }
                    } else if (isset($actor_id) == NULL){
                        $weird_name = $conn->query("SELECT id FROM actors a WHERE a.last_name = '".$lname."' AND a.first_name LIKE '".$fname."%'");
                        
                        if($weird_name->rowCount() > 0) {
                            if ($weird_name->rowCount() == 1) {
                                foreach($weird_name as $id)
                                    $actor_id = $id['id'];
                    
                                if(isset($actor_id)){
                                    $sql = $conn->query("SELECT movie.year, movie.name FROM movies movie JOIN roles role1 ON role1.movie_id = movie.id JOIN actors actor1 ON role1.actor_id = actor1.id JOIN roles role2 ON role2.movie_id = movie.id JOIN actors actor2 ON role2.actor_id = actor2.id WHERE role1.movie_id = role2.movie_id AND role1.actor_id = '".$actor_id."' AND role2.actor_id = '".$kevin_id."' ORDER BY movie.year DESC, movie.name ASC");

                                    $row_num = 0;

                                    if($sql->rowCount() < 1){
                                        echo $fname, ' ', $lname, ' wasn`t in any films with Kevin Bacon.';
                                    } else {
                                        createtablehead();

                                        foreach($sql as $row){
                                            echo "<tr><td>";
                                            echo $row_num+1;
                                            echo "</td><td>";
                                            echo $row['name'];
                                            echo "</td><td>";
                                            echo $row['year'];
                                            echo "</td></tr>";
                                            $row_num++;
                                        }
                                    }
                                }
                            } else {
                                $weird_name = $conn->query("SELECT id FROM actors a WHERE a.last_name = '".$lname."' AND a.first_name LIKE '".$fname."' AND a.film_count = (SELECT film_count FROM actors b WHERE b.last_name = '".$lname."' AND b.first_name LIKE '".$fname."' HAVING MAX(film_count))");
                                if ($weird_name->rowCount() == 1) {
                                    foreach($weird_name as $id)
                                        $actor_id = $id['id'];

                                    if(isset($actor_id)){
                                        $sql = $conn->query("SELECT movie.year, movie.name FROM movies movie JOIN roles role1 ON role1.movie_id = movie.id JOIN actors actor1 ON role1.actor_id = actor1.id JOIN roles role2 ON role2.movie_id = movie.id JOIN actors actor2 ON role2.actor_id = actor2.id WHERE role1.movie_id = role2.movie_id AND role1.actor_id = '".$actor_id."' AND role2.actor_id = '".$kevin_id."' ORDER BY movie.year DESC, movie.name ASC");

                                        $row_num = 0;

                                        if($sql->rowCount() < 1){
                                            echo $fname, ' ', $lname, ' wasn`t in any films with Kevin Bacon.';
                                        } else {
                                            createtablehead();

                                            foreach($sql as $row){
                                                echo "<tr><td>";
                                                echo $row_num+1;
                                                echo "</td><td>";
                                                echo $row['name'];
                                                echo "</td><td>";
                                                echo $row['year'];
                                                echo "</td></tr>";
                                                $row_num++;
                                            }
                                        }
                                    }
                                } else {
                                    $weird_name = $conn->query("SELECT id FROM actors a WHERE a.last_name = '".$lname."' AND a.first_name LIKE '".$fname."' Having MIN(id)");
                                    if ($weird_name->rowCount() == 1) {
                                        foreach($weird_name as $id)
                                            $actor_id = $id['id'];

                                        if(isset($actor_id)){
                                            $sql = $conn->query("SELECT movie.year, movie.name FROM movies movie JOIN roles role1 ON role1.movie_id = movie.id JOIN actors actor1 ON role1.actor_id = actor1.id JOIN roles role2 ON role2.movie_id = movie.id JOIN actors actor2 ON role2.actor_id = actor2.id WHERE role1.movie_id = role2.movie_id AND role1.actor_id = '".$actor_id."' AND role2.actor_id = '".$kevin_id."' ORDER BY movie.year DESC, movie.name ASC");

                                            $row_num = 0;

                                            if($sql->rowCount() < 1){
                                                echo $fname, ' ', $lname, ' wasn`t in any films with Kevin Bacon.';
                                            } else {
                                                createtablehead();

                                                foreach($sql as $row){
                                                    echo "<tr><td>";
                                                    echo $row_num+1;
                                                    echo "</td><td>";
                                                    echo $row['name'];
                                                    echo "</td><td>";
                                                    echo $row['year'];
                                                    echo "</td></tr>";
                                                    $row_num++;
                                                }
                                            }
                                        }
                                    } else {
                                        echo 'Actor ', $fname, ' ', $lname, ' not found.';
                                    }
                                }
                            }
                        } else {
                            echo 'Actor ', $fname, ' ', $lname, ' not found.';   
                        }
                    }
                    ?>
                </table>
            </div>    
            <form action="search-all.php" method="get">
					<fieldset>
						<legend>All movies</legend>
						<div>
							<input name="firstname" type="text" size="12" placeholder="first name" autofocus="autofocus" /> 
							<input name="lastname" type="text" size="12" placeholder="last name" /> 
							<input type="submit" value="go" />
						</div>
					</fieldset>
				</form>

				<!-- form to search for movies where a given actor was with Kevin Bacon -->
				<form action="search-kevin.php" method="get">
					<fieldset>
						<legend>Movies with Kevin Bacon</legend>
						<div>
							<input name="firstname" type="text" size="12" placeholder="first name" /> 
							<input name="lastname" type="text" size="12" placeholder="last name" /> 
							<input type="submit" value="go" />
						</div>
					</fieldset>
				</form>
            <div id="closer">
            <a href="index.php"><img src="mymdb.png" alt="banner logo" /></a>
			</div>
        </div>
    </body>
</html>
