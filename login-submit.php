<?php 
    session_start();
    
    $_SESSION["name"]=$_POST["uname"];
    $_SESSION["score"]=0;

    
    $file =file("data.txt");
    $found=false;
    for($i=0;$i<count($file);$i++){
        $personinfo=explode(",",$file[$i]);
        $username=trim($personinfo[0]);
        $passwurd=trim($personinfo[1]);
        if($username==$_POST["uname"]){
            if($passwurd==$_POST["pass"]){
                $found=true;
                break;
            }
        }
    }
    if(!$found){
        echo "<div id=\"box\">
        <p>Incorrect username or password.</p>
        <br>
        </div>";
    }else{
        echo "<div id=\"box\">
                <p>Successfully logged in.</p>
                <br>
                <br>
                <p><a href=\"stage1.php\">Continue to the first puzzle here</a></p>
            </div>";
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" text="text/css" href="main.css">
    <title></title>
    <title>Log in</title>
</head>
<body>

</body>
</html>