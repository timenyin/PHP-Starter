<?php

// Global scope
$name = 'Alice';

echo $name;

function sayBye()
{
    global $name;
    $name = 'Harmony';
    // Local scope
    echo '<br>';
    echo 'Hello to ' . $name;
}

sayBye();

function syaGoodBye()
{
    $names = ['Jack', 'precious'];
    echo '<br>';
    echo 'Goodbye ' . $names[0] . ' and ' . $names[1];
}


echo syaGoodBye();
