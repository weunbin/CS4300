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
                    <?php
                    include 'common.php';
                    $conn = getdataconnection();
                    $fname = $_GET["firstname"];
                    $lname = $_GET["lastname"];
                    $id_actor = getactorid($fname, $lname);
                    
                    foreach($id_actor as $id)
                        $actor_id = $id['id'];
                    
                    if(isset($actor_id)){
                    $sql = $conn->query("SELECT movie.year, movie.name FROM movies movie JOIN roles role ON role.movie_id = movie.id JOIN actors actor ON role.actor_id = actor.id WHERE role.actor_id = '".$actor_id."' ORDER BY movie.year DESC, movie.name ASC");
                   
                    $row_num = 0;
                    
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
                    else{ echo 'Actor ', $fname, ' ', $lname, ' not found.';}
                    
                    
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