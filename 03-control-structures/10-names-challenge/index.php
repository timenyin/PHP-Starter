<?php

/*
Names Challenge:
1. Take the array of names below and loop through them. The type of loop is up to you.
2. Within the loop, use a conditional statement to check if the first letter of the name is 'A'.
3. If the first letter is 'A', skip that name and continue to the next iteration.
4. If the first letter is not 'A', reverse the string.
5. Make all names lowercase before printing them.
*/

$names = ['Alex', 'Beth', 'Caroline', 'Dave', 'Elanor', 'Anna', 'Freddie', 'Adam'];

foreach ($names as $name) {
    if ($name[0] == 'A') {
        continue;
    }

    echo strtolower(strrev($name));
}


for ($i = count($names) - 1; $i >= 0; $i--) {
    $name = $names[$i];
    if (substr($name, 0, 1) === 'A') {
        continue;
    }
    $reversedName = strtolower(strrev($name));
    echo $reversedName . '<br>';
}
