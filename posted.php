<!DOCTYPE HTML>
<html> 
    <head>
    <title>Super Awesome Form</title>
    </head>
    
    <body>
    

        <form action="posted.php" method="POST">
            <input type= "text" name="first"/>
            <input type= "text" name="last" />
            <input type= "submit" value= "send"/>
        
        </form>

        <?php
       $sql_link = new mysqli("localhost", "friend", "mypassword", "mydatabase"); 

    $restaurants_query = "SELECT * FROM restaurants";

    $result = mysqli_query ($sql_link, $restaurants_query);

if(!$result) {
 echo "Could not successfully run query ($sql) from DB: " .mysql_error;    
}

// var_dump($restaurants);

        ?> 
        
        
        
    
    
    
    
    
    
    
    </body>
    </html>