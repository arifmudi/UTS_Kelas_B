<?php
//Shah Wiruddin
namespace Codecademy;

$giraffe_foods = ["dip"=>"guacamole", "chips"=>"corn", "entree"=>"grilled chicken"];

$impala_foods = ["dessert"=>"cookies", "vegetable"=>"asparagus", "side"=>"mashed potatoes"];

$rat_foods = ["dip"=>"mashed earth worms", "entree"=>"trash pizza", "dessert"=>"sugar cubes", "drink"=>"lemon water"];

// Write your code below:
//2255201031
$potluck = $giraffe_foods + $impala_foods;

print_r($potluck);
$rat_impala = $rat_foods + $impala_foods;

print_r($rat_impala);
$everybody =  $giraffe_foods + $impala_foods + $rat_foods;

print_r($everybody);
//Kelas B