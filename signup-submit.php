<?php
        $file="singles.txt";
        $newdata="\n".$_POST["name"].",".$_POST["gender"].",".$_POST["age"].",".$_POST["personality"].",".$_POST["favos"].",".$_POST["minage"].",".$_POST["maxage"];
        file_put_contents($file,$newdata,FILE_APPEND);
        $name=$_POST["name"];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="nerdieluv.css">
    <title>Document</title>
</head>
<body>
<header id="bannerarea">
        <a href="index.php"><img src="nerdluv.png" alt="logo banner"></a>
        <p>where meek geeks meet</p>
</header>
    <h1>Thank you!</h1>
    <p>Welcome to NerdLuv, <?php echo $_POST["name"] ?>!</p>
   
    <p>Now <a href="matches.php">log in to see your matches!</a></p>
    <footer>
    <pre>This page is for single nerds to meet and date each other! Type in
your personal information and wait for the nerdly luv to begin!
Thank you for using our site.

Results and page (C) Copyright NerdLuv Inc.</pre>
        <br>
        <a href="index.php"><img src="arrow.png" alt="back arrow">Back to front page</a>
    </footer>
</body>
</html>