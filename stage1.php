<?php
 session_start();

?>

<html>
    <head>
        <title> Stage 1 </title>
        <link rel="stylesheet" href="stages.css">
    </head>
    <body>
        <div class="background">
            <img src="bg1.jpeg" alt=""/>
        </div>
        <div id="top">
            <h1 id="top_h1">Stage 1</h1>
            <h4 id="top_h4"> Congratulations! You found a treasure on this treasure island. <br>
                Solve the following puzzle to find out the password 
                for the locked treasure box and become the owner of the gold! <br></h4>
            <img id="q1" src="puzzle1.png">
        </div>
        <div id="box">
         <form action="check.php" method="post">
            <input type="text" placeholder="Write your answer here" name="first">
            <input type="submit" value="Submit Answer">
         </form>   
        </div>
        
    </body>
</html>