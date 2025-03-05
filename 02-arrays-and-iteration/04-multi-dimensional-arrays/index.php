<?php
$output = null;
$fruits = [
  ['Apple', 'Red'],
  ['Orange', 'Yellow', 'Green'],
  ['Banana', 'Green'],

];

$frameworks = [
  ['HTML', 'Bootstrap5'],
  ['Javascript', 'React'],
  ['PHP', 'Larval'],
];

$EngineeringCourse = [
  ['Mechanical', 'MEE321'],
  ['Civil', 'CV235'],
  ['EEE', 'EEE501'],
  ['CPU', 'CPU211'],
];

//- add more frame work ---
$output = $frameworks[] = ['Database', 'mySQL'];



$output = $fruits[1][2];

$fruits[] = ['Grape', 'Purple'];

$users = [
  ['name' => 'john', 'email' => 'john@gmail.com', 'password' => '123456'],

  ['name' => 'Mary', 'email' => 'Mary@gmail.com', 'password' => '23456'],

  ['name' => 'Okafo', 'email' => 'Okafo@gmail.com', 'password' => '34567'],

  ['name' => 'Mike', 'email' => 'Mike@gmail.com', 'password' => '456789']
];

$Department = [
  ['mechanical' => 'mat200', 'level' => '200', 'grade' => 'A'],
  ['civil' => 'cve401', 'level' => '400',  'grade' => 'B'],
  ['electrical' => 'eee509', 'level' => '500',  'grade' => 'C'],
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

$output = $Department[1]['grade'];


// get the number total of array 
// $output = count($users);

$output = count($Department);

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

      <p>
      <pre>
          <?= print_r($frameworks) // print_r($fruits)  
          ?>
        </pre>
      </p>


      <p>
      <pre>
          <?= print_r($Department) // print_r($fruits)  
          ?>
        </pre>
      </p>
    </div>
  </div>
</body>

</html>