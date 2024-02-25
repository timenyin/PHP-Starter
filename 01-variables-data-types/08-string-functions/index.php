<?php
$output = null;
$string = "hello world";

//  ====== strlen ======
$output = strlen($string); // --count number of letter ----

// ----- str_word_count ----
$output = str_word_count($string); // ---count each  words ------

//-strpos-----
$output = strpos($string, 'world'); // ---- count a particular world -----

// - Get specific --------
$output = $string[8]; // -- get a character from a string using the index ---


// - substr ----
$output = substr($string, 6, 5); // -------- get part of thr strings -------

//  ---- str_replace -------
$output = str_replace('world', strtoupper('Harmony'), $string);



// ----- Uppercase string ---------
$output = strtoupper($string);

//----  first letter uppercase ---- ucwords --------
$output = ucwords($string);

//-trim -----------
$output = trim(' Hello world  '); // to clear out space between worlds ----------


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../../main.ico" type="image/x-icon" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>08-string-functions</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">String-functions</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <p class="text-xl"><?= $output ?></p>
    </div>
  </div>
</body>

</html>