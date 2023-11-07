<?php
namespace Codecademy;
$assignment_one = ["Alex"=> 87, "Kenny"=> 91, "Natalia"=> 91, "Lily"=> 67, "Dan"=> 81, "Kat"=> 77, "Sara" => 65];

$assignment_two = ["Alex"=> 91, "Kenny"=> 99, "Natalia"=> 100, "Lily"=> 61, "Dan"=> 88, "Kat"=> 90];

$assignment_three = ["Alex"=> 78, "Kenny"=> 92, "Natalia"=> 94, "Lily"=> 79, "Dan"=> 73, "Sara" => 61];

$student_name = "Alex";
// Write your code below:
$assignment_two["Sara"] = 65; 
$assignment_three["Kat"] = 97; 

echo "Assignment One: ";
print_r($assignment_one);
echo "Assignment Two: ";
print_r($assignment_two);
echo "Assignment Three: ";
print_r($assignment_three);

$assignment_one = array("Dan" => 81, "Alice" => 92, "Bob" => 78);
$assignment_two = array("Dan" => 88, "Alice" => 88, "Bob" => 95);
$assignment_three = array("Dan" => 73, "Alice" => 89, "Bob" => 91);
// Create a new indexed array $dans_grades
$dans_grades = array(
    $assignment_one ["Dan"], 
    $assignment_two ["Dan"],  
    $assignment_three ["Dan"] 
);

print_r ($dans_grades);
$assignment_two = array(
    "Dan" => 90,
    "Alice" => 88,
    "Bob" => 95
);
$student_name = "Dan";
echo $assignment_two [$student_name];
?>
