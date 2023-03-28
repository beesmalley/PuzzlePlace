<?php
 session_start();

?>
<html>
    <head>
        <title> Stage 5 </title>
        <link rel="stylesheet" href="stages.css">
    </head>
    <body>
        <div class="background">
            <img src="bg5.jpeg" alt=""/>
        </div>
        <div id="top">
            <h1 id="top_h1">Stage 5</h1>
            <h4 id="top_h4">Solve the riddle to find the code and disarm the bomb in the briefcase!</h4>
            <img id="q5" src="puzzle5.png">
        </div>
        <div id="box">
            <form action="check.php" method="post">
                <input type="text" placeholder="Write your answer here" name="fifth">
                <input type="submit" value="Submit Answer">
             </form> 
        </div>
        
    </body>
</html>