<?php
$name = array('john', 'mark', 'harmony');
$nameTwo = array('harmony', 'timenyin', 'john');

echo '<pre>';
var_dump($nameTwo);
echo '</pre>';



$numbers = [1, 2, 3, 4, 5, 6, 7];


function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}


inspect($numbers);
inspect($name);

print_r($name);

// -- asses a single value -------
echo '<br>';
echo $name[2];
echo '<br/>';
echo $nameTwo[2];
echo '<br/>';

echo $numbers[4];


// add elements to array 

$numbers[6] = 100; // -add to the end of array ------
inspect($numbers);
echo '<br/>';
$nameTwo[4] = 'mark';
var_dump($nameTwo);
echo '<br/>';

//------- change posting in the array ----
$numbers[3] = 200;
inspect($numbers);

$nameTwo[2] = 'BossBaby';

var_dump($nameTwo);



//--- remove single  array 
unset($numbers[3]);


inspect($numbers);

//-- to add or reset back to normal ---
$numbers = array_values($numbers);

inspect($numbers);
