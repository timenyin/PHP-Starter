<?php


$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = 'apple';


$bool = true;
$bool2 = false;
$null = null;




// -----Implicit Conversion  ---

$result = $number1 + $number2;
$result = $number1 + $number3; // ---- convert to a int 

// var_dump($result);
$result = $number3 + $number3;

$result = $number1 . $number2; // ----- convert to string

// $result = $fruit + $number2; // ---- Error 

// $result = $number1 + $boo1;  //--- int(boot to int) -- 6

// $result = $number1 + $boo2;  // --- int(bool tp int) -- 5

// $result = $number +  $null; // ------ covert to 0 ------ 


//  ---- Explicit Conversion ----
$result = (string) $number1;
$result = (string) $number2;
$result = (int) $number3;
// $result = (int)$bool;
// $result = (bool) $number1;

var_dump($result);
