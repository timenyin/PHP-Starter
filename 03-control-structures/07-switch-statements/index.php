<?php
$daysOfWeeks = date('l');

switch ($daysOfWeeks) {
  case 'Monday':
    $message = 'Monday Blues';
    $color = 'blue';
    break;

  case 'Tuesday':
    $message = 'Tuesday Blues';
    $color = 'green';
    break;

  case 'Wednesday':
    $message = 'Wednesday Blues';
    $color = 'purple';
    break;

  case 'Thursday':
    $message = 'Thursday Blues';
    $color = 'brown';
    break;

  case 'Monday':
    $message = 'Monday Blues';
    $color = 'blue';
    break;

  case 'Saturday':
    $message = 'Saturday Blues';
    $color = 'yellow';
    break;

  case 'Sunday':
    $message = 'Sunday Blues';
    $color = 'white';
    break;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>What Day Is It?</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: <?= $color ?>;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
</head>

<body>
  <h1><?= strtoupper($message) ?></h1>
</body>

</html>