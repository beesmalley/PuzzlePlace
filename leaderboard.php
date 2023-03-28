<?php
session_start();

//Read scores file and get scores for each player
$scores_file = file("score.txt");
$scores = [];
foreach($scores_file as $line) {
    $parts = explode(",", $line);
    $scores[$parts[0]] = intval($parts[1]);
}

// Update score for current player
if(isset($_SESSION["name"])){
    $name = $_SESSION["name"];
    $score = isset($_SESSION["score"]) ? intval($_SESSION["score"]) : 0;
    if(isset($scores[$name])) {
        $scores[$name] += $score;
    }// } else {
    //     $scores[$name] = $score;
    // }
    // unset($_SESSION["score"]);
}

// Sort scores in descending order
arsort($scores);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
			background-image: url('R.jpg');
        }
        .header {
            background-color: #ada9a1;
            color: #ffffff;
			border: 10px solid #dddddd;
            text-align: center;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            font-size: 18px;
            margin-bottom: 40px;
        }
        th {
            background-color: #ada9a1;
            font-weight: bold;
            text-align: left;
            padding: 10px;
            border: 5px solid #dddddd;
            color: #ffffff;
        }
        td {
            background-color: #ffffff;
            text-align: left;
            padding: 10px;
            border: 5px solid #dddddd;
        }
        tr:nth-child(even) td {
            background-color: #f2f2f2;
        }
        tr:hover td {
            background-color: #dddddd;
        }
        @media screen and (max-width: 768px) {
            table {
                font-size: 16px;
            }
            .header {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Leaderboard</h1>
    </div>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Player</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($scores as $name => $score): ?>
                <tr>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $score; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>