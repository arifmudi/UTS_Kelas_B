<?php
//fathan al ashraf
$record_holders = [];
// Write your code below:
array_unshift($record_holders, "Tim Montgomery", 
"Maurice Greene", "Donovan Bailey", "Leroy Burrell", "Carl Lewis");

echo implode(", ", $record_holders) . "\n\n";
//2155201033
array_shift($record_holders);

echo implode(", ", $record_holders) . "\n\n";

array_unshift($record_holders, "Justin Gatlin", "Asafa Powell");
echo implode(", ", $record_holders) . "\n\n";
array_shift($record_holders);
echo implode(", ", $record_holders) . "\n\n";
array_unshift($record_holders, "Usain Bolt");
echo implode(", ", $record_holders) . "\n\n";
//Kelas B