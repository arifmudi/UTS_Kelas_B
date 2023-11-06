<?php
// Write your code below
//Selvi Widya Rahmi
$round_one = ["X", "X", "first winner"];

$round_two = ["second winner", "X", "X", "X"];

$round_three = ["X", "X", "X", "X", "third winner"];

//2255201030
$winners = [$round_one[2], $round_two[0], $round_three[4]];

print_r($winners);
//Kelas B
echo implode(", ", $winners);
?>