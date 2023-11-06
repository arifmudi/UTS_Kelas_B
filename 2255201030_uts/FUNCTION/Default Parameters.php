<?php
// Write your code below:
// selvi widya rahmi
function calculateTip($total, $tip = 20)
{
  return $total * (1 + $tip/100);
}
// 2255201030
echo calculateTip(100, 25);
echo "\n";
echo calculateTip(100); 
echo "\n";
// kelas B
echo calculateTip(65, 15); 
?>



