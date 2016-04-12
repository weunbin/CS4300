<!doctype html>
<html>
    <head>
        <title>Search Kevin</title>
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
                    echo $_GET["firstname"]." ".$_GET["lastname"]." and Kevin Bacon";
                    ?>
                </div>
                <table>
                    <tr>
                        <td>#</td>
                        <td>Title</td>
                        <td>Year</td>
                    </tr>
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
                    
                    $sql = $conn->query("SELECT movie.year, movie.name FROM movies movie JOIN roles role1 ON role1.movie_id = movie.id JOIN actors actor1 ON role1.actor_id = actor1.id JOIN roles role2 ON role2.movie_id = movie.id JOIN actors actor2 ON role2.actor_id = actor2.id WHERE role1.movie_id = role2.movie_id AND role1.actor_id = '".$actor_id."' AND role2.actor_id = '".$kevin_id."' ORDER BY movie.year DESC, movie.name ASC");
                   
                    $row_num = 0;
                    
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
        </div>
    </body>
</html>