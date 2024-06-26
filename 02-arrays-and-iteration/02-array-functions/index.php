<?php
$output = null;

$ids = [10, 45, 32, 77, 87, 99];
$users = ['user1', 'user2', 'user4', 'user3', 'user4'];

$output = count($ids);

sort($ids);
sort($users);

// revers order ------
rsort($ids);
rsort($users);


// ---- array push to end of the array------
array_push($ids, 389);
array_push($users, 'user6');

// - array_pop -----
array_pop($ids);
array_pop($users);

// --array shift ----- 
array_shift($ids);
array_shift($users);


// ----- array_unshift --------
array_unshift($ids, 311);
array_unshift($users, 'user9');


// ------- array_slice remove array In between  --------
$ids2 = array_slice($ids, 2, 3);
// var_dump($ids2);

// ----replace with a string -------
array_splice($ids, 2, 2, 'new Id');

// ---- array sum-----
$output = 'sum of IDs: ' . array_sum($ids);

//---- array_search ------
$output = 'user 2 is a index: ' . array_search('user2', $users);

array_push($users, 'users3');
// var_dump(array_push($users, 'users3'));


// -----in array check if the array exists ----
$output = 'User 3 exists:' . in_array('user3', $users);

//----- explode string into array ---
$tags = 'tech,code,programming';
$tagsArr = explode(',', $tags);
// var_dump($tagsArr);


//-----implode --- array to string ----
$output = implode(',', $users);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>02-array-functions</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">Array-functions</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <p class="text-xl"><?= $output ?></p>
            <h2 class="text-xl font-semibold my-4">ID's Arrays</h2>
            <p>
            <pre>
                    <?= print_r($ids) ?>
                </pre>
            </p>

            <h2 class="text-xl font-semibold my-4">Users Arrays</h2>
            <p>
            <pre>
                    <?= print_r($users) ?>
                </pre>
            </p>
            </p>
        </div>
    </div>
</body>

</html>