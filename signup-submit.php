<?php
        $file="data.txt";
        $newdata="\n".$_POST["uname"].",".$_POST["pass"];
        file_put_contents($file,$newdata,FILE_APPEND);
        $name=$_POST["uname"];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="nerdieluv.css">
    <title>Successful Registration!</title>
</head>
<body>
    <h1>Thank you!</h1>
    <p>You have successfully registered under the name, <?php echo $_POST["name"] ?>!</p>
    <p>Please log in to access the puzzles.</p>
    <

</body>
</html>