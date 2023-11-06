<?php
//arsi_dewi_saputri
//2255201002
//semester_3
namespace Codecademy;

// Write your code below:
$hybird_array = array("first element", "second element","third elemen"," fourt element"," five element");
$hybrid_array[8] = "five more";
array_push($hybird_array, rand());
echo $hybrid_array[8];