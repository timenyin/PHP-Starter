<?php
/*
VARIABLE RULES:
- All variables are prefixed with a dollar sign ($).
- They must start with a letter or an underscore.
- They cannot start with a number.
- They can only contain letters, numbers, and underscores.
- They are case sensitive. So, `$name` and `$Name` are two different variables.
*/

/*
CONVENTIONS:
- Underscores: $server_name
- Camel Case: $serverName
- Pascal Case: $ServerName
- lowercase: $servername
*/

$title = "replace php from class";
$heading = "PHP variable Types";

// ------ types of Data types --------
$name = 'Harmony';
$lastName = 'Kunu';

var_dump($name);
echo '<br>';
echo getType($name);
echo '<br>';

// ------- Integer ------
$age = 3;
var_dump($age);
echo '<br>';

// ------ Float ------
$ratings = 4.6;
var_dump($ratings);
echo '<br>';

// ------- Boolean ------
$isMarried = true;
var_dump($isMarried);
echo '<br>';

// -- Array --------
$listHobbits = ['football', 'coding', 'video_game', 'reading'];
var_dump($listHobbits);
echo '<br>';
//------------ Object ---------
$person = new stdClass();
var_dump($person);
echo '<br>';

// ------- Null ------
$hasAHouse = null;
var_dump($hasAHouse);
echo '<br>';


//--  Resource File --- type  
// $file = fopen('sample,pdf ', 'r');
// var_dump($file);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../main.ico" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $title ?></title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?= $heading ?></h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4">Welcome To The Course</h2>
            <p>In this course, you will learn the fundamentals of the PHP language</p>
        </div>
    </div>
</body>

</html>