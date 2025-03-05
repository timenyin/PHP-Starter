<?php
//   condition ? true : false
$score = 50;

if ($score > 40) {
    echo "high score";
} else {
    echo "Low Score";
}


echo "<br>";

$result =  $score > 40 ? "High Score" : "Low Score";

echo $result;
