<?php 
    $file =file("data.txt");
    $user='';
    $pass='';
    $found=false;
    for($i=0;$i<count($file);$i++){
        $personinfo=explode(",",$file[$i]);
        if($personinfo[0]==$_POST["uname"]){
            $user=$file[$i];
            if($personinfo[1]==$_POST["pass"]){
                $found=true;
                break;
            }
        }
    }
    if(!$found){
        echo "Incorrect username or password.";
    }else{
        echo "<div id=\"box\">
                <p>Successfully logged in.</p>
                <br>
                <p><a href=\"stage1.html\">Continue to the first puzzle here</a></p>
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
</head>
<body>

</body>
</html>