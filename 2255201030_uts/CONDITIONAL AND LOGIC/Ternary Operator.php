<?php
namespace Codecademy;
//Selvi Widya Rahmi
function ternaryCheckout($items)
{
return $items <= 12 ? "express lane" : "regular lane";
}
//2255201030
function ternaryVote($age)
{
  return $age >= 18 ? "yes" : "no";
}
//Kelas B
echo ternaryCheckout(4);
echo "\n\n";
echo ternaryCheckout(16);
echo "\n\n";
echo ternaryVote(10);
echo "\n\n";
echo ternaryVote(20);
?>