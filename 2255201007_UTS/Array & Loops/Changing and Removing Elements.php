<?php
namespace Codecademy;
// Sarwo Dinata
$my_car = [
  "oil" => "black and clumpy",
  "brakes" => "new",
  "tires" => "old with worn treads",
  "filth" => "bird droppings", 
  "wiper fluid" => "full", 
  "headlights" => "bright"
];
print_r($my_car);

// Write your code below:
$my_car["oil"] = "new and premium";

$my_car["tires"] = "new with deep treads";
// 2255201007
unset ($my_car["filth"]);

print_r($my_car);
// Kelas B
