<?php 
    echo '<header id="bannerarea">
    <a href="index.php"><img src="nerdluv.png"></a>
    <p>where meek geeks meet</p>
</header>';
    $file =file("singles.txt");
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
        $userinfo=explode(",",$user);
        echo '<b>Matches for '.$userinfo[0].'</b>';
        $matchingminds=false;
        $matchingage=false;
        $numofMatches=0;
        $umind=$userinfo[3];
        for($i=0;$i<count($file);$i++){
            $matchinfo=explode(',',$file[$i]);
            $matchingminds=false;
            for($j=0;$j<strlen($umind);$j++){
                if(str_contains($matchinfo[3],$umind[$j])){
                    $matchingminds=true;
                }
            }
            if($matchinfo[2]>=$userinfo[5]&&$matchinfo[2]<=$userinfo[6]&&$userinfo[2]>=$matchinfo[5]&&$userinfo[2]<=$matchinfo[6]){
                $matchingage=true;
            }else{
                $matchingage=false;
            }
            if($matchinfo[1]!=$userinfo[1]&&$matchingage&&$matchinfo[4]==$userinfo[4]&&$matchingminds){
                $numofMatches++;
                echo '
               
                
                <div class="match">
                   
                   
                    <p>'.$matchinfo[0].'</p>
                    <img src="monkey.png">
                    
                    <ul>
                        <strong><li>gender:</li></strong>
                        <strong><li>age:</li></strong>
                        <strong><li>type:</li></strong>
                        <strong><li>OS:</li></strong>
                        <li>'.$matchinfo[1].'</li>
                        <li>'.$matchinfo[2].'</li>
                        <li>'.$matchinfo[3].'</li>
                        <li>'.$matchinfo[4].'</li>
                    </ul>
                   
                </div>
                ';
            }
        }
        if($numofMatches==0){
            echo '<br><br>No matches available.';
        }
        

    }




    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" text="text/css" href="nerdieluv.css">
    <title>Document</title>
</head>
<body>

<footer>
    <pre>This page is for single nerds to meet and date each other! Type in
your personal information and wait for the nerdly luv to begin!
Thank you for using our site.

Results and page (C) Copyright NerdLuv Inc.</pre>
        <br>
        <a href="index.php"><img src="arrow.png" width="35px" height="35px">Back to front page</a>
    </footer>
</body>
</html>