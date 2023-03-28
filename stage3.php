<?php
 session_start();

?>
<html>
    <head>
        <title> Stage 3 </title>
        <link rel="stylesheet" href="stages.css">
    </head>
    <body>
        <div class="background">
            <img src="bg3.jpeg" alt=""/>
        </div>
        <div id="top">
            <h1 id="top_h1">Stage 3</h1>
            <h4 id="top_h4">Agent, you have been assigned a new mission. <br>
                Locate the prepared vehicle and move it to the mission location. <br></h4>
            <img id="q3" src="puzzle3.png">
        </div>
        <div id="box">
            <form action="check.php" method="post">
                <input type="text" placeholder="Write your answer here" name="third">
                <input type="submit" value="Submit Answer">
             </form> 
        </div>
        
    </body>
</html>