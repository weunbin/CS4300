<?php include '/header.html' ?>
    <form action="action_player.php" method="get">
        <fieldset>
            <legend>Player</legend>
            First Name:<input type="text" maxlength="14" size="14"><br><br>
            Last Name: <input type=text maxlength="14" size="14"><br><br>
          Position:  <select name="position">
                <option value="pg">PG</option>
                <option value="SF">SF</option>
                <option value="PF">PF</option>
                <option value="SG">SG</option>
                <option value="C">C</option>

            </select>
            <br>
            <input type="submit">
        </fieldset>
    </form>
    <?php include '/footer.html' ?>
