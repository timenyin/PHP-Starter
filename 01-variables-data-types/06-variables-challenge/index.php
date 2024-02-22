<?php
$title = 'Harmony PHP Blog';
$author = 'Harmony kunu';
$body = 'PHP (Hypertext Preprocessor) is a widely used server-side scripting
  language that has revolutionized web development. With its simplicity,
  flexibility, and vast community support, PHP has become the backbone of
  countless dynamic websites and web applications.';
$pageTitle = 'Introduction to PHP'

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../../main.ico" type="image/x-icon" />
  <title><?= $title . ' | ' . $pageTitle  ?></title>
</head>

<body>
  <main>
    <h1><?= $pageTitle ?></h1>
    <p>By: <?= $author ?></p>
    <p>
      <?= $body ?>
    </p>
  </main>
</body>

</html>