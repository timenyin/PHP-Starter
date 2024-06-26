<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/

$output = null;

$num1 = 20.89;
$num2 = 7;

$output = "$num1 + $num2 = " . $num1 + $num2;
$output = "$num1 - $num2 = " . $num1 - $num2;
$output = "$num1 * $num2 = " . $num1 * $num2;
$output = "$num1 / $num2 = " . $num1 / $num2;
$output = "$num1 % $num2 = " . $num1 % $num2;

// ------- Assignment Operator --------
$num3 = 10;
$num4 = 99;
//$num3 = $num3 + 20;
// ------- OR -------
$num3 += 20;
$num3 -= 20;
$num3 /= 2;

$num4 /= 11;

$output = $num3;
$output = $num4;

//  ------ Build-in PHP Functions -------

/*
| Build-in PHP Functions
| Name        |  Function Names    |
| --------    | -------------- |
| Random      | rand()         |
| Max-Random  | getrandmax()   |
| Round       | round()        |
| Square-root | sqrt()         |
| Absolute    | abs()          |
| PI          | pi()           |
| Maximum     | max()          |
| Minimum     | min()          |
|NumberFormat | number_format()|         

*/

// 
$output = rand();

$output = getrandmax();

$output = rand(1, 100);

$output = round(6.89);

$output = sqrt(144);

$output = abs(-9.8);

$output = pi();

$output = max([1, 2, 3, 50]);

$output = min([12, 2, 8, 10,  3, 50]);

$output = number_format(3728179.98389, 2, '.', ',')









?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../../main.ico" type="image/x-icon" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>07-arithmetic-operators-math-function</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">Arithmetic-operators-math-functions</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <p class="text-xl">
        <?= $output ?>
      </p>
    </div>
  </div>
</body>

</html>