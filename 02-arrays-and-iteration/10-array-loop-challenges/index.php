<?php

/*
  Challenge 1: Create a multiplication table using a nested `for` loop. The table should look like this:

1 x 1 = 1
1 x 2 = 2
1 x 3 = 3
1 x 4 = 4
1 x 5 = 5
1 x 6 = 6
1 x 7 = 7
1 x 8 = 8
1 x 9 = 9
1 x 10 = 10
2 x 1 = 2
2 x 2 = 4
2 x 3 = 6
2 x 4 = 8
... 
10 x 10 = 100
*/

echo '<h3>Multiplication Table</h3>';

for ($numberA = 1; $numberA <= 10; $numberA++) {
  for ($numberB = 1; $numberB <= 10; $numberB++) {
    var_dump($numberA . ' X ' . $numberB);
    echo $numberA . ' x ' . $numberB . ' = ' . $numberA * $numberB . '<br>';
  }
}


echo '==========================================================';
/*
Challenge 2: Get the sum of the numbers in an array by using a foreach loop. For bonus points, also use a for loop.
*/

echo '<h3>Array Sum</h3>';

$numbers = [1, 2, 3, 4, 5];

$sum = 0;

foreach ($numbers as  $total)
  $totalSum =  $total + $sum;
echo $totalSum;
echo '<br>';

// ========= fro loop method =========
$sum2 = 0;

for ($numbersum = 0; $numbersum < count($numbers); $numbersum++);
$totalSumFor = $sum2 + $numbersum;


echo $totalSumFor;
echo '<br>';

/*
Challenge 3: Calculate the average students grade from an array of students. Each student has their own array with the
key 'grades'.

1. Create an array of students with their names and grades (0 - 100)
2. Iterate over the students array with a foreach loop
3. Calculate the average grade for each student
*/


$students = [
  [
    'name' => 'John',
    'grades' => [65, 99, 73, 53]
  ],
  [
    'name' => 'Milk',
    'grades' => [60, 90, 83, 53]
  ],

  [
    'name' => 'John',
    'grades' => [65, 79, 43, 53]
  ]
];

echo '<h3>Average Grade</h3>';



foreach ($students as $student) {
  $name = $student['name'];
  $grades = $student['grades'];
  // get the average grade for each students 
  $average = array_sum($grades) / count($grades);
  echo "$name: Average Grade = $average <br>";
}
