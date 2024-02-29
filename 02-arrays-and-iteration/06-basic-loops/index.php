<?php
// for ($i = 0; $i <= 10; $i++) {
//     echo $i . '<br />';
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <!-- Output -->
            <ul>
                <?php for ($i = 0; $i <= 10; $i++) : ?>
                    <li>Number:
                        <? $i ?>
                    </li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</body>

</html>