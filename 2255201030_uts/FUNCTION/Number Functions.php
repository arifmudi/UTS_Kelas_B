<?php
// Write your code below:
// selvi widya rahmi
function calculateDistance ($first, $second)
{
  return abs ($first-$second);
}
echo calculateDistance(-1, 4);
echo "\n";
echo calculateDistance(4, -1);
echo "\n";
echo calculateDistance(3, 7);
echo"\n";
echo calculateDistance(7, 3);
echo "\n";
function calculateTip($total)
{
// 2255201030
  return round ($total * 1.18);
}
echo calculateTip(100);
echo "\n";
// kelas B
echo calculateTip(35);
echo "\n";
echo calculateTip(88.77);
?>

