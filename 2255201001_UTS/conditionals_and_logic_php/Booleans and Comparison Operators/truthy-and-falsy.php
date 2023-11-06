<?php
//Alman Azizi
namespace Codecademy;

function truthyOrFalsy ($value)
{
    if ($value){
        return "True";
    } else {
        return "False";
    }
}
//2255201001
/*
// Alternate version using ternary:

function truthyOrFalsy ($value)
{
  return $value ? "True" : "False";
}


*/


echo truthyOrFalsy(TRUE);
echo "\n\n";
echo truthyOrFalsy(FALSE);
echo "\n\n";
echo truthyOrFalsy("cat");
echo "\n\n";
echo truthyOrFalsy("");
echo "\n\n";
echo truthyOrFalsy("-10290192.871");
echo "\n\n";
echo truthyOrFalsy("0");
echo "\n\n";
//Kelas B