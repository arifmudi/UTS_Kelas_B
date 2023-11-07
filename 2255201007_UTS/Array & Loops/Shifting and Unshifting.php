<?php
namespace Codecademy;
$record_holders = [];
// Write your code below:
array_unshift($record_holders, "Tim Montgomery", 
"Sarwo Dinata","2255201007", "Kelas B", "Carl Lewis");

echo implode(", ", $record_holders) . "\n\n";

array_shift($record_holders);

echo implode(", ", $record_holders) . "\n\n";

array_unshift($record_holders, "Justin Gatlin", "Asafa Powell");

echo implode(", ", $record_holders) . "\n\n";

array_shift($record_holders);

echo implode(", ", $record_holders) . "\n\n";

array_unshift($record_holders, "Usain Bolt");

echo implode(", ", $record_holders) . "\n\n";
