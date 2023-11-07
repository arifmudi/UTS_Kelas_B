<?php
//arsi_dewi_saputri
//2255201002
//semester_3
namespace Codecademy;
function chooseCheckoutLane($items)
{
  if ($items <= 12){
    return "express lane";
  } else {
    return "regular lane";
  }
}
function canIVote ($age) 
{
    if($age >= 18){
        return "yes";
       } else {
       return "no";
    }
 }

echo chooseCheckoutLane(1);
echo "\n\n";
echo chooseCheckoutLane(13);
echo "\n\n";
echo canIVote(19);
echo "\n\n";
echo canIVote(13);
