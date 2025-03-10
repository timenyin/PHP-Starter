<?php

$numbers = [1, 2, 3, 4, 5];

$square = function ($number) {

    return $number * $number;
};

$squareNumber = array_map($square, $numbers);

print_r($squareNumber);

echo "<br>";

function applyCallBack($callback, $value)
{
    return $callback($value);
};

$double = function ($number) {
    return $number * 2;
};

$result = applyCallBack($double, 5);

echo $result;
