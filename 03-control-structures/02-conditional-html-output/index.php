<?php

$isloggedIn = true;
$name = 'Null';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../../main.ico" type="image/x-icon" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <?php
      if ($isloggedIn) : ?>
        <?php if (isset($name)) : ?>
          <h1 class="text-3xl"> Welcome to the App <?= $name ?> </h1>
        <?php else : ?>
          <h1 class="text-3xl"> Welcome to the App</h1>
        <?php endif ?>
      <?php else : ?>
        <h1 class="text-3xl"> Logged In to view</h1>
      <?php endif ?>


      <?php if ($isloggedIn && $name) : ?>
        <h1 class="text-3xl"> Welcome to the App <?= $name ?> </h1>
      <?php elseif ($isloggedIn) : ?>
        <h1 class="text-3xl"> Welcome to the App</h1>
      <?php else : ?>
        <h1 class="text-3xl"> Logged In view </h1>
      <?php endif ?>

    </div>
  </div>
</body>

</html>