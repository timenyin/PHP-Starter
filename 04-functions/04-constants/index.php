<?php
define("APP_NAME", "My App");
define("APP_VERSION", "1.0.0");

const DB_NAME = 'myDB';
const DB_HOST = 'localhost';




function run()
{
    echo APP_NAME;
    echo '<br>';
    echo APP_VERSION;
    echo '<br>';
    echo DB_NAME, '<br>', DB_HOST;
}

run();
