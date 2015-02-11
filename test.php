<!DOCTYPE html>
<html>
    <head>
        <title>Super Awesome Form</title>
    </head>
    <body>

        <p>Hello world!</p>

        <form method = "GET" action="test.php">
            <input type="range" min="0" max="10" name="numbers">
            <input type="text" name="sometext">
              <input type="submit" value="Touch Me"> 
        </form> 
        <div>
        
        </div>
        <div>
            <?php 
            
            if ($_GET['numbers'] ==10) {
             echo "WINNER!";   
            }
            echo "You Picked Number ";
            echo $_GET['numbers'];

            
            
            ?>
        
        </div>
        
    </body>
</html>
