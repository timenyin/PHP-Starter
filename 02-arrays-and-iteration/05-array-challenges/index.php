<?php

/*
  Challenge 1: Sum of an array
  
  1. Create an array of numbers 
  2. Get the sum of all of the numbers combined and put into a variable.
  4. Get the amount of numbers in the array and put into a variable.
  5. Print out 'The sum of the {amount} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'. 
*/
echo '<h3>Number Array</h3>';
$numbers = [2, 5, 6, 7, 8, 9, 21, 44, 55];
$output = 'sums of numbers ' . array_sum($numbers);
echo $output;
echo '<br>';
$output_total = 'total numbers in the array ' . count($numbers);
echo $output_total;

/*
  Challenge 2: Colors array

  1. Reverse the `$colors` array.
  2. Add 'purple' and 'orange' to the end of the array.
  3. Replace the second color with 'pink'
  4. Remove the last element of the array.

You should end up with the following array: ['yellow', 'pink', 'blue', 'red', 'purple']
*/

echo '<h3>Colors Array</h3>';

$colors = ['red', 'blue', 'green', 'yellow'];
array_reverse($colors);
echo '<br>';
echo '<br>';
echo '=================Reverse the `$colors` array.=========================';
echo '<br>';

var_dump($colors);
echo '<br>';
echo '<br>';
echo '==================== Add \'purple\' and \'orange\' to the end of the array. ======================';
echo '<br>';

array_push($colors, 'purple', 'orange'); // or use array_merge($color, ['purple', 'orange']);
var_dump($colors);
echo '<br>';
echo '<br>';
echo '================  Replace the second color with \'pink\' ==========================';
echo '<br>';
array_splice($colors, 1, 1, 'pink');
var_dump($colors);

echo '<br>';
echo '<br>';
echo '===================Remove the last element of the array=======================';
echo '<br>';
array_pop($colors);
var_dump($colors);




/*
  Challenge 3: Job listings array

  1. Create a multi-dimensional array of associative arrays of 3 job listings with the fields id, job_title, company, contact_email, and contact_phone. Also add an array field for skills. The skills array should be an array of strings with each skill a person has. For example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.
  2. Create a new listing using the `array_push()` function. The new listing should have the same fields as the others.
  3. Print out the job_title of the second job listing in the array.
  4. Print out the first skill of the third job listing in the array.
*/

echo '<h3>Job Listings</h3>';

$user = [
  'name' => 'harmony',
  'email' => 'timenyindonkunu@gmail.com',
  'password' => '12345',
  'hobbies' => ['Football', 'swimming', 'gym', 'video_game']

];

$job_Listings = [
  ['id' => 1, 'job_title' => 'ui design', 'company' => 'wax.com', 'contact_email' => 'wix@gmail.com', 'contact_phone' => '09826662881', 'skills' => ['adobe xd, figma, adobe suits']],

  ['id' => 2, 'job_title' => 'frontEnd Designer',  'company' => 'amazon.com', 'contact_email' => 'amazon@gmail.com', 'contact_phone' => '08126662881', 'skills' => ['JavaScript', 'HTML', 'CSS']],

  ['id' => 3, 'job_title' => 'backEnd',  'company' => 'facebook.com', 'contact_email' => 'facebook@gmail.com', 'contact_phone' => '67826662881', 'skills' => ['PHP', 'MySQL', 'MongoDB']]

];

echo '<pre>';
var_dump($job_Listings);
echo '</pre>';

echo '<br>';
echo '===================Create a new listing=======================';
echo '<br>';

array_push($job_Listings, ['id' => 4, 'job_title' => 'machine learning', 'company' => 'google.com', 'contact_email' => 'google@gmail.com', 'contact_phone' => '4562662881', 'skills' => ['R', 'Python', 'tensor flow']]);


echo '<pre>';
var_dump($job_Listings);
echo '</pre>';

echo '<br>';
echo '===================Print out the job_title of the second job listing=======================';
echo '<br>';

$job = $job_Listings[1]['job_title'];
var_dump($job);

echo '<br>';
echo '===================Print out the first skill of the third job listing in the array for all =======================';
echo '<br>';

$job = $job_Listings[3]['skills'];
var_dump($job);


echo '<br>';
echo '===================Print out the first skill of the third job listing in the array for single =======================';
echo '<br>';

$job = $job_Listings[3]['skills'][0];
var_dump($job);
