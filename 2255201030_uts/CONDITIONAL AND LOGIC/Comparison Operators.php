<?php
namespace Codecademy;
//Selvi Widya Rahmi
function chooseCheckoutLane($items)
{
  if ($items <= 12){
   return "express lane";
  }else {
    return "regular lane";
  }
}
//2255201030
function canIVote($age)
{
  if ($age >= 18){
    return "yes";
  }else {
    return "no";
  }
}
//Kelas B
echo chooseCheckoutLane(1);
echo "\n\n";
echo chooseCheckoutLane(13);
echo "\n\n";
echo canIVote(19);
echo "\n\n";
echo canIVote(13);
?>