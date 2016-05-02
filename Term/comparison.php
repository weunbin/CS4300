<?php include 'header.html' ?>
<body>
<div id = "playerComparison">
    <form action="comp-players.php" method="get">
        <fieldset id ="fieldComparison">
            <legend id ="legendComparison">NBA Player Comparison</legend>
            <div id="comparison">
                    Player 1
                    <input id="inputComp" name="name" type="text" size="22" placeholder="Firstname and Lastname" /> 
                    Player 2
                    <input name="name2" type="text" size="22" placeholder="Firstname and Lastname" />  
                    <input type="submit" value="Compare!" />
            </div>
        </fieldset>
    </form>
</div>
    </body>

