<?php
namespace Codecademy;
// Write your code below:
//Selvi Widya Rahmi
$giraffe_foods = ["dip"=>"guacamole", "chips"=>"corn", "entree"=>"grilled chicken"];

$impala_foods = ["dessert"=>"cookies", "vegetable"=>"asparagus", "side"=>"mashed potatoes"];

$rat_foods = ["dip"=>"mashed earth worms", "entree"=>"trash pizza", "dessert"=>"sugar cubes", "drink"=>"lemon water"];

$potluck = $giraffe_foods + $impala_foods;
print_r($potluck);
//2255201030
$rat_impala = $rat_foods + $impala_foods;

print_r($rat_impala);

$everybody =  $giraffe_foods + $impala_foods + $rat_foods;
//Kelas B
print_r($everybody);
?>