<?php

// var_dump($_POST);

$time = $_POST['time']
$name = $_POST['name']
$size = $_POST['size']

if ($time && $name && $size) {

    $current_leaders = file_get_contents("leaderboard.json");
    $open_json = substr($current_leaders, 0, -1);

    $new_leader = ',
    {
        "name": '.$name.',
        "puzzleSize": '.$size.',
        "solveTime": '.$time.'
    }';

    $new_json = $open_json . $new_leader . "]";

    $leaderboard = fopen("leaderboard.json", "w") or die("Unable to find leaderboard!");
    fwrite($leaderboard, $new_json);
    fclose($leaderboard);

    header("Location: leaderboard.html");
} else {
    echo "Leaderboard submission error.";
}