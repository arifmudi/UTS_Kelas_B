<?php
//Agus Salim
namespace Codecademy;

// Write your code below:
$hybrid_array = ["aku", "dia", 888, 88.88];

$hybrid_array[8] = "five more";
//2255201010

print_r($hybrid_array);

array_push($hybrid_array, rand());

echo $hybrid_array[9];
//Kelas B