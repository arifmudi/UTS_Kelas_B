<?php
//Shah Wiruddin
namespace Codecademy;

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
//2255201031
$my_car["oil"] = "new and premium";

$my_car["tires"] = "new with deep treads";

unset ($my_car["filth"]);
print_r($my_car);
//Kelas B