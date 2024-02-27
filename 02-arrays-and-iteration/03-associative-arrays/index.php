<?php
$output = null;

$user = [
    'name' => 'harmony',
    'email' => 'timenyindonkunu@gmail.com',
    'password' => '12345',
    'hobbies' => ['Football', 'swimming', 'gym', 'video_game']

];
// -- get the arrays ------
$output = $user['name'];

$output = $user['hobbies'][3];

// ---- Add array ----
$user['address'] = '123 main ST Road';
$user['hobbies'][4] = 'coding';

// ---- remove array ------
unset($user['address']);


// var_dump($user);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>03-associative-arrays</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">Associative-arrays</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <p class="text-xl"><?= $output ?></p>
            <h2 class="text-xl font-semi-bold my-4">User Array</h2>
            <p>
            <pre>
                <?= print_r($user) ?>
            </pre>
            </p>
        </div>
    </div>
</body>

</html>