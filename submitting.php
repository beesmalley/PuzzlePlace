<?php
        $file="data.txt";
        $score=0;
        $newdata="\n".$_POST["uname"].",".$_POST[""].$score;
        file_put_contents($file,$newdata,FILE_APPEND);
        $name=$_POST["name"];

        $file =file("data.txt");
        $user='';
        $found=false;
        for($i=0;$i<count($file);$i++){
            $personinfo=explode(",",$file[$i]);
            if($personinfo[0]==$_POST["name"]){
                $user=$file[$i];
                $found=true;
                break;
            }
        }
        if(!$found){
            echo "No user by that name.";
        }else{
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