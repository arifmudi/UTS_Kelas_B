<?php
//hayuda_putra_pratama
//225520041
//semester_3
namespace Codecademy;
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
