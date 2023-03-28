<?php
 session_start();

$file = file("answers.txt");
$stage1=$file[0];
$stage2=$file[1];
$stage3=$file[2];
$stage4=$file[3];
$stage5=$file[4];
if(isset($_POST["first"])&&$_REQUEST["first"]){
    if($_POST["first"]==$stage1){
        $_SESSION["score"]++;
    }
    echo "<div id=\"box\"> 
    <p><a href=\"stage2.php\">Move on to stage 2.</a></p>
    <p>Current score: ".$_SESSION["score"]."</p>
    </div>";
}
if(isset($_POST["second"])&&$_REQUEST["second"]){
    if($_POST["second"]==$stage2){
        $_SESSION["score"]++;
    }
    echo "<div id=\"box\"> 
    <p><a href=\"stage3.php\">Move on to stage 3.</a></p>
    <p>Current score: ".$_SESSION["score"]."</p>
    </div>";
}
if(isset($_POST["third"])&&$_REQUEST["third"]){
    if($_POST["third"]==$stage3){
        $_SESSION["score"]++;
    }
    echo "<div id=\"box\"> 
    <p><a href=\"stage4.php\">Move on to stage 4.</a></p>
    <p>Current score: ".$_SESSION["score"]."</p>
    </div>";
	
}
if(isset($_POST["fourth"])&&$_REQUEST["fourth"]){
    if($_POST["fourth"]==$stage4){
        $_SESSION["score"]++;
    }
    echo "<div id=\"box\"> 
    <p><a href=\"stage5.php\">Move on to stage 5.</a></p>
    <p>Current score: ".$_SESSION["score"]."</p>
    </div>";
}
if(isset($_POST["fifth"])&&$_REQUEST["fifth"]){
    if($_POST["fifth"]==$stage5){
        $_SESSION["score"]++;
    }
    echo "<div id=\"box\"> 
    <p>Congratulations, you have completed all stages!</p>
	<p>Final score: ".$_SESSION["score"]."</p>
	<p><a href=\"leaderboard.php\">View leaderboard</a></p>
    </div>";

    $file="score.txt";
    $newdata="\n".$_SESSION["name"].",".$_SESSION["score"];
    file_put_contents($file,$newdata,FILE_APPEND);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>