<?php
 session_start();
 if(isset($_SESSION["name"])){
    echo "Session is set. Session name: ".$_SESSION["name"];
 }
?>
<html>
    <head>
        <title> Stage 4 </title>
        <link rel="stylesheet" href="stages.css">
    </head>
    <body>
        <div class="background">
            <img src="bg4.jpeg" alt=""/>
        </div>
        <div id="top">
            <h1 id="top_h1">Stage 4</h1>
            <h4 id="top_h4">A letter lies on top of the briefcase. <br>
                Discover the hidden code and find the password for the briefcase!</h4>
            <img id="q4" src="puzzle4.png">
        </div>
        <div id="box">
            <form action="check.php" method="post">
                <input type="text" placeholder="Write your answer here" name="fourth">
                <input type="submit" value="Submit Answer">
             </form> 
        </div>
    </body>
</html>