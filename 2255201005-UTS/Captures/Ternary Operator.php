<?php
namespace Codecademy;
//putra ramadan
//2255201005

function ternaryCheckout($items)
{
    return $items <= 12 ? "express lane" : "regular lane";
}

function ternaryVote ($age) 
{
  return $age >= 18 ? "yes" : "no";
 }

echo ternaryCheckout(1);
echo "\n\n";
echo ternaryCheckout(13);
echo "\n\n";
echo ternaryVote(19);
echo "\n\n";
echo ternaryVote(13);