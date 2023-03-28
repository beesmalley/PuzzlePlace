<?php
 session_start();

?>
<html>
    <head>
        <title> Stage 6 </title>
        <link rel="stylesheet" href="stages.css">
    </head>
    <body>
        <div class="background">
            <img src="bg6.jpeg" alt=""/>
        </div>
        <div id="top">
            <h1 id="top_h1">Stage 6</h1>
            <h4 id="top_h4">Last step! <br> 
                Use the password from other gates to find the connection, <br>
                then open the last locked gate(306) and escape here!</h4>
            <img id="q6" src="puzzle6.png">
        </div>
        <div id="box">
            <form action="check.php" method="post">
                <input type="text" placeholder="Write your answer here" name="sixth">
                <input type="submit" value="Submit Answer">
             </form> 
        </div>
        
    </body>
</html>