<?php
$output = null;
/*
        - `y` - year;
        - `m` - month;
        - `d` - date;
        - `D` - the day of the week short name;
        - `l` - te full day of the week name;
        - `h` - the hour;
        - `i` - minute;
        - `s` - seconds;
        - `a` - AM/PM;


    */


$output = date('Y');

$output = date('Y', 936345600); // get a particular date --------- e.g 1990 --

$output = date('Y', strtotime('1999-09-01')); // get year from str to time ----


// -get month ------
$output = date('m');

// --- get the day -----
$output = date('D');
$output = date('l'); // - full spelling on the days --

// -get the all together --------
$output = date('Y-m-d');
$output = date('m-d-Y');


// - get the hour ----
$output = date('h');

// -- get the minutes ------
$output = date('t');

// ---- get the seconds -----
$output = date('s');

// -- get a time together -------
$output = date('Y-m-d:h-t-s a');





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../main.ico" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>working-with-dates</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">Working-with-dates</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <p class="text-xl"><?php echo $output; ?></p>
        </div>
    </div>
</body>

</html>