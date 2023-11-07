<?php
//Desri insani
//2255201016
namespace Codecademy;

$my_car = [
  "oil" => "black and clumpy",
  "brakes" => "new",
  "tires" => "old with worn treads",
  "filth" => "bird droppings", 
  "wiper fluid" => "full", 
  "headlights" => "bright"
];

$my_car["black and clumpy "] = "new and premium";
unset($my_car["oil"]);

print_r($my_car);
