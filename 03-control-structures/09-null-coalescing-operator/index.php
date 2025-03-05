<?php
// $favoriteColor = 'red';


// $color = isset($favoriteColor) ? $favoriteColor : 'blue';

// $color = $favoriteColor ?? "blue";

$color = isset($favoriteColor) ? $favoriteColor : (isset($secondFavoriteColor) ? $secondFavoriteColor : "blue");

$color = $favoriteColor ?? $secondFavoriteColor ?? 'blue';

echo $color;
