<?php
 session_start();

?>
<html>
    <head>
        <title> Stage 2 </title>
        <link rel="stylesheet" href="stages.css">
    </head>
    <body>
        <div class="background">
            <img src="bg2.jpeg" alt=""/>
        </div>
        <div id="top">
            <h1 id="top_h1">Stage 2</h1>
            <h4 id="top_h4"> Warning! You've fallen into a trap. <br>
                Solve this problem to find the password for the dynamite and get out of the danger! <br></h4>
            <img id="q2" src="puzzle2.png">
        </div>
        <div id="box">
            <form action="check.php" method="post">
                <input type="text" placeholder="Write your answer here" name="second">
                <input type="submit" value="Submit Answer">
            </form>       
        </div>
        
    </body>
</html>