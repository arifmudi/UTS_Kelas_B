<?php
//SEKAR MELATI
namespace Codecademy;

function ternaryCheckout($items)
{
    return $items <= 12 ? "express lane" : "regular lane";
}

function ternaryVote($age)
{
    return $age >= 18 ? "yes" : "no";
}
//Nim 2155201030
echo ternaryCheckout(1);
echo "\n\n";
echo ternaryCheckout(13);
echo "\n\n";
echo ternaryVote(19);
echo "\n\n";
echo ternaryVote(13);
//KELAS B