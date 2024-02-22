<?php

/*
  PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/

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