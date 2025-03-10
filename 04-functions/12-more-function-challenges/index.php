<?php
/*
  Challenge 1: Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.

  The formula to convert Fahrenheit to Celsius is:
     Celsius = (Fahrenheit - 32) * 5/9
*/
// function fahrenheitToCelsius($Fahrenheit)
// {
//   return ($Fahrenheit - 32) * 5 / 9;
// };

// $result = fahrenheitToCelsius(600);

// echo round($result) . "°C";

// echo '<br>';

//using arrow function 
$fahrenheitToCelsius = fn ($Fahrenheit) => ($Fahrenheit - 32) * 5 / 9;
echo round($fahrenheitToCelsius(300)) . '°C';




echo '<br>';

/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.
*/
function printNamesToUpperCase()
{
  return  ["Alice", "Bob", "Charlie", "David", "Emma"];
}

$uppercase = printNamesToUpperCase();

foreach ($uppercase as $upperCase) {
  echo strtoupper($upperCase) . '<br>'; // Uppercase 
  echo '<br>';
  echo ucfirst($upperCase) . '<br>'; // Capitalize
}


echo '<br>';

/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  3. The output should look like this:
*/

function findLongestWord($sentence)
{
  $words = explode(" ", $sentence); // Split sentence into an array of words
  $longestWord = "";

  foreach ($words as $word) {
    // Remove punctuation to consider only actual words
    $word = preg_replace("/[^a-zA-Z]/", "", $word);

    if (strlen($word) > strlen($longestWord)) {
      $longestWord = $word;
    }
  }

  return $longestWord;
}

echo '<br>';

// Example Usage
$sentence = "The quick brown fox jumped over the lazy dog.";
echo "Longest word: " . findLongestWord($sentence);


//  using arrow function 
$findLongestWord = fn ($sentence) => array_reduce(
  explode(" ", preg_replace("/[^a-zA-Z ]/", "", $sentence)),
  fn ($longest, $word) => strlen($word) > strlen($longest) ? $word : $longest,
  ""
);

echo '<br>';
// Example Usage
$sentence = "The quick brown fox jumped over the lazy dog.";
echo "Longest word for arrow function : " . $findLongestWord($sentence);
