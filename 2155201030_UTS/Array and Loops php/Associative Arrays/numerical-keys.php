<?php
//Sekar Melati
namespace Codecademy;

// Write your code below:
$hybrid_array = ["cat", "dog", 9, 18.2];

$hybrid_array[8] = "five more";

print_r($hybrid_array);
//2155201030
array_push($hybrid_array, rand());

echo $hybrid_array[9];
//Kelas B