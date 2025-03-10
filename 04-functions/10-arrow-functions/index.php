<?php
$add = fn ($a, $b) => $a <=> $b;

// echo $add(1, 2);


// callback function 
$number = [1, 2, 3, 4, 5];

$squareNumbers = array_map(fn ($number) => $number * $number, $number);


print_r($squareNumbers);
