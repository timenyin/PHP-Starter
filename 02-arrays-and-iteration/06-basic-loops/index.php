<?php
// for ($i = 0; $i <= 10; $i++) {
//     echo $i . '<br />';
// }

// ----- while loop ----
// $harmony = 0;
// while ($harmony < 20) {
//     echo  $harmony . '<br />';
//     $harmony++;
// }


// ---- Do-While Loop ----------
// $harmony = 0;
// do {
//     echo $harmony++ . '<br>';
// } while ($harmony <= 10)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../main.ico" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>06-basic-loops</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">Basic-loops</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output for Loop -->
            <ul>
                <?php // for ($harmony = 1; $harmony <= 20; $harmony++) : 
                ?>

                <!-- <li>Number:
                        <?php // $harmony 
                        ?>
                    </li> -->
                <?php // endfor; 
                ?>

                <?php
                // $harmony = 0;
                // while ($harmony < 20) :  
                ?>
                <!-- <li>Number: <?php // $harmony 
                                    ?></li> -->
                <?php // $harmony++;
                //endwhile; 
                ?>

                <?php $harmony = 0;
                do { ?>
                    <li>Number: <?= $harmony ?></li>
                <?php $harmony++;
                } while ($harmony < 10)
                ?>
            </ul>
        </div>
    </div>
</body>

</html>