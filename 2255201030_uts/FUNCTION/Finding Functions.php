<?php
namespace Codecademy;
// selvi widya rahmi

// Write your code below:
function convertToShout($str)
{
  return strtoupper($str) . "!";
}
echo convertToShout("woah there, buddy");
echo "\n";
echo convertToShout("i just don't know");
echo "\n";
echo convertToShout("oh, ok, that's fine");
echo "\n";
echo convertToShout("it's nice to meet you");
echo "\n";
// 2255201030
function tipGenerously($cost)
{
  return ceil($cost * 1.2);
}
echo tipGenerously(100.00);
echo "\n";
echo tipGenerously(982.27);
echo "\n";
echo tipGenerously(15.67);
echo "\n";
echo tipGenerously(66.18);
echo "\n";
echo tipGenerously(21.65);
echo "\n";
// kelas B
function calculateCircleArea($diameter)
{
  return pi() * ($diameter/2)**2;
}
echo calculateCircleArea(25);
echo "\n";
echo calculateCircleArea(30);
echo "\n";
echo calculateCircleArea(872);
echo "\n";
echo calculateCircleArea(6);
echo "\n";
echo calculateCircleArea(29);
?>