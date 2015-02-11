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
            if($_POST) {
             print_r($_POST);   
            }
            else {
             echo "Nothing Submitted Yet.";   
            }


        ?> 
        
        
        
    
    
    
    
    
    
    
    </body>
    </html>