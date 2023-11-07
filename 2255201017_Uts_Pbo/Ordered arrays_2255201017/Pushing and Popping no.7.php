<?php
namespace Codecademy;

$stack = array(); 
// Write your code below:
array_push ($stack, "wild success", "failure", "truggle", "blocker", "impediment");
print_r ($stack);
while (count($stack) > 1) {
    array_pop ($stack);
    print_r ($stack);
}
?>