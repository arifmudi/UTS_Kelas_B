<?php
namespace Codecademy;

// Write your code below:
$hybrid_array = array(
    "Apple",      
    42,           
    3.14,         
    true          
);
$hybrid_array[8] = "five more";
print_r($hybrid_array);
array_push($hybrid_array, rand());
echo $hybrid_array[9];
?>