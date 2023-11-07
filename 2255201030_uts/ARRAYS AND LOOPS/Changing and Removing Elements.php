<?php
namespace Codecademy;
//Selvi Widya Rahmi
$my_car = [
  "oil" => "black and clumpy",
  "brakes" => "new",
  "tires" => "old with worn treads",
  "filth" => "bird droppings", 
  "wiper fluid" => "full", 
  "headlights" => "bright"
];
print_r($my_car);
//2255201030
// Write your code below:
//Kelas B
$my_car["oil"] = "new and premium";
$my_car["tires"] = "new with deep treads";
unset($my_car["filth"]);
print_r($my_car);
?>