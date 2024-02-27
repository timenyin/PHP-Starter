<?php
$output = null;
$fruits = [
  ['Apple', 'Red'],
  ['Orange', 'Yellow', 'Green'],
  ['Banana', 'Green'],

];

$output = $fruits[1][2];

$fruits[] = ['Grape', 'Purple'];

$users = [
  ['name' => 'john', 'email' => 'john@gmail.com', 'password' => '123456'],

  ['name' => 'Mary', 'email' => 'Mary@gmail.com', 'password' => '23456'],

  ['name' => 'Okafo', 'email' => 'Okafo@gmail.com', 'password' => '34567'],

  ['name' => 'Mike', 'email' => 'Mike@gmail.com', 'password' => '456789']
];

$output = $users[3]['password'];

// ------ update users --------
array_push(
  $users,
  ['name' => 'Larry', 'email' => 'larry@gmail.com', 'password' => '98765']
);

array_push(
  $users,
  ['name' => 'Oliver', 'email' => 'Oliver@gmail.com', 'password' => '456711']
);

array_pop($users); /// ----remove from the bottom 
array_shift($users); //-----remove from the top

unset($users[2]);

// ---- show a particular array ------
$output = $users[1]['email'];

$output = count($users);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>04-multi-dimensional-arrays</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">Multi-dimensional-arrays</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <p class="text-xl"><?= $output ?></p>
      <p>
      <pre>
          <?= print_r($users) // print_r($fruits)  
          ?>
        </pre>
      </p>
    </div>
  </div>
</body>

</html>