<?php
// Write your code below:
function convertToQuestion(&$str)
{
  $str = "Do you think " . $str . "?\n";
}
$string_one = "I have tiger";
convertToQuestion($string_one);
$string_two = "sky are nice";
convertToQuestion($string_two);
$string_three = "blue is my favorite color";
convertToQuestion($string_three);

echo $string_one;
echo $string_two;
echo $string_three;
