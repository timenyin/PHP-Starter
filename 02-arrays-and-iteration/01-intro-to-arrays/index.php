<?php
$name = array('john', 'mark', 'harmony');

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
echo $numbers[4];


// add elements to array 

$numbers[6] = 100; // -add to the end of array ------
inspect($numbers);


//------- change postiong in the array ----
$numbers[3] = 200;
inspect($numbers);


//--- remove single  array 
unset($numbers[3]);

inspect($numbers);

//-- to add or reset back to normal ---
$numbers = array_values($numbers);

inspect($numbers);
