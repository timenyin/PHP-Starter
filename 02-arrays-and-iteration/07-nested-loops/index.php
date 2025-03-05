<?php
// for ($harmony = 0; $harmony < 5; $harmony++) {
//   for ($anny = 0; $anny < 5; $anny++) {
//     echo $harmony . ' - ' . $anny . '<br>';
//   }
// }

// $harmony = 0;

// while ($harmony < 5) {
//   $anny = 0;

//   while ($anny < 5) {
//     echo $harmony . ' - ' . $anny . '<br>';
//     $anny++;
//   }
//   $harmony++;
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../main.ico" type="image/x-icon" />
    <title>Nested Loops & CSS Grid Example</title>
    <style>
    .grid-container {
        display: grid;
        grid-template-columns: repeat(5, 50px);
        /* Create 5 columns, each 50px wide */
        grid-gap: 5px;
        /* Add some spacing between grid items */
    }

    .grid-item {
        width: 50px;
        height: 50px;
        background-color: lightblue;
        text-align: center;
        line-height: 50px;
    }
    </style>
</head>

<body>
    <div class="grid-container">
        <?php for ($harmony = 0; $harmony < 5; $harmony++) : ?>
        <?php for ($anny = 0; $anny < 5; $anny++) : ?>
        <div class="grid-item">
            <?= $harmony . ' - ' . $anny ?>
        </div>
        <?php endfor ?>
        <?php endfor ?>
    </div>
</body>

</html>