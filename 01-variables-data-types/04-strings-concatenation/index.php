<?php
$firstName = 'Harmony';
$lastName = 'Kunu';

$fullName = $firstName . ' ' . $lastName;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>04-strings-concatenation</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">04-strings-concatenation</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <!-- Output -->
            <?= 'Hello my name is' . ' ' .  $fullName . '<br>' ?>
            <?= "Hello her name is  $firstName" . '<br>' ?>
            <?= "hello my name is 'harmony' " . '<br>'?>
            <?= 'hello my name is \'kunu\' ' . '<br>' ?>
        </div>
    </div>
</body>

</html>