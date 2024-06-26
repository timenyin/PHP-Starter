<?php

function add($a = 1, $b = 2)
{
    return $a + $b;
};


echo add(1, 3);

echo '<br>';

echo add();

function sayHello($name)
{
    return 'Hello' . $name;
}

echo '<br>';
echo sayHello('Harmony');


function addAll(...$numbers)
{
    $total = 0;

    foreach ($numbers as $numbers) {
        $total += $numbers;
    }

    return $total;
}

echo addAll(1, 2, 3, 4, 5);
