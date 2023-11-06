<?php
namespace Codecademy;
$record_holders = [];
// Write your code below:
//Selvi Widya Rahmi
array_unshift($record_holders, "Tim Montgomery", "Maurice Greene","Donovan Bailey", "Leroy Burrell", "Carl Lewis");
echo implode ( ",", $record_holders) . "\n\n";
//2255201030
array_shift($record_holders);

array_unshift($record_holders, "Justin Gatlin", "Asafa Powell");
echo implode ( ",", $record_holders) . "\n\n";

array_shift($record_holders);
//Kelas B
array_unshift($record_holders, "Usain Bolt");
echo implode ( ",", $record_holders) . "\n\n";
?>