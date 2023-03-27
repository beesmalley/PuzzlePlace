<?php

$file = file("answers.txt");
$stage1=$file[0];
$stage2=$file[1];
$stage3=$file[2];
if($_REQUEST["first"]){
    if($_POST["first"]==$stage1){
        $_SESSION["score"]++;
    }
    echo "<div id=\"box\"> 
    <p><a href=\"stage2.html\">Move on to stage 2.</a></p>
    <p>Current score: ".$_SESSION["score"]."</p>
    </div>";
}
if($_REQUEST["second"]){
    if($_POST["second"]==$stage2){
        $_SESSION["score"]++;
    }
    echo "<div id=\"box\"> 
    <p><a href=\"stage3.html\">Move on to stage 3.</a></p>
    <p>Current score: ".$_SESSION["score"]."</p>
    </div>";
}
if($_REQUEST["third"]){
    if($_POST["third"]==$stage3){
        $_SESSION["score"]++;
    }
    echo "<div id=\"box\"> 
    <p><a href=\"stage4.html\">Move on to stage 4.</a></p>
    <p>Current score: ".$_SESSION["score"]."</p>
    </div>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>