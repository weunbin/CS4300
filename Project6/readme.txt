Alright guys,

I correctly implemented search-all and search-kevin. 
I tested it multiple times with different queries to make sure that everything is outputting correctly.


Things left to do:
    common.php : Any common code that is shared between pages
        1) We can make a common getactorid() function for getting the actors id 
           because for both files I have to get the id for the actor we're looking for
        2) We can put the database connection part in here, rather than connecting to
           the database everytime we submit to search-all or search-kevin
        3) figure out what else we can put in the common.php
    bacon.css : the CSS styles shared by all pages
        - I did not do any of the CSS for any of the pages.
        - You guys need to figure out how to do the CSS for all the pages
        - Make sure you adhere to the appearance constraints
    search-all.php & search-kevin.php :
        - Show an error message if the actor was not found.
          This should be simple. Just use an if-else statement.
        - I didn't do the third query, which is the following :
            3. both pages - Find the ID for a given actor's name: One thing that makes 
            this program more complicated is the fact that some actors share the same name. 
            The imdb data resolves this by giving them slightly different first names, such as "Will (I) Smith" vs. "Will (II) Smith".  
            The user presumably doesn't know or understand this, so they will just type "Will Smith" and expect the program to do the right thing.  
            But if your code naively searches for "Will Smith" in the database, it will not find any match.
            To resolve this, you need a third query that searches for the best match for the actor's name that was typed by the user.  
            This query finds and returns the ID of the actor whose last name exactly matches what was typed by the user, and whose 
            first name starts with the text typed by the user.  If more than one such actor exists, you use the actor who has appeared in the most movies,
            breaking ties by choosing the actor with the lower-numbered ID.
            You could figure out how many movies an actor has appeared in using a series of joins between tables, 
            but this can be hard to get right and can be slow.  To help, we have created a column in the actors table named film_count 
            that contains the total number of roles played in all films by the actor.  You can use this column to help write your query.
            Hint: You don't need any JOINs here because all information comes from the actors table. 

        
        
Side Notes: 
    - I made no change to index.php
    - Make sure you have apache/mysql running on XAMPP before you start the project
    - Also, make sure your database is named imdb_small and import the tables using
      the CSCI4300_Project6.sql. (Just copy and paste the sql into the SQL tab on phpmyadmin) 
    - If you can't connect to your database make sure to include the right password
        for your mysql. i.e. change $username ="root"; $password =""; to whatever
        your username and password
    
Yeah, so that's all we have left. You guys can figure out a way to split those three parts 
and we will be done with project 6.

-William