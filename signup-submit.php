<?php
        $file="data.txt";
        $newdata=$_POST["uname"].",".$_POST["pass"]."\n";
        file_put_contents($file,$newdata,FILE_APPEND);
        $name=$_POST["uname"];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Successful Registration!</title>
</head>
<body>
    <div id="box">
        <div id="inner">
            <h1>Thank you!</h1>
            <p>You have successfully registered under the name, <?php echo $_POST["uname"] ?>!</p>
            <p>Please <a href="index.html">log in</a> to access the puzzles.</p>
        </div>
    </div>
</body>
</html>